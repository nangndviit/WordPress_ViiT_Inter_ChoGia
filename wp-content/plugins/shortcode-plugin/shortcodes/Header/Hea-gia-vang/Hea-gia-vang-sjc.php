<?php
add_shortcode('shortcode_gia_vang_sjc', 'create_shortcode_gia_vang_sjc');
function create_shortcode_gia_vang_sjc()
{
    // Lấy dữ liệu từ API về giá vàng
    $api_url = 'https://apichogia.viit.com.vn/api/json/gia-vang?slug=vang-sjc';
    $response = wp_remote_get($api_url);

    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        // Kiểm tra xem có dữ liệu hay không
        if ($data && isset($data['success']) && $data['success']) {
            $shows = $data['shows'];

            // Tạo một mảng để tổ chức thông tin theo từng địa phương
            $locations = array();
            foreach ($shows as $show) {
                $location = $show['brand']['name'];
                $type = $show['type']['name'];
                $buy = number_format($show['buy'], 0, '.', '.');
                $sell = number_format($show['sell'], 0, '.', '.');

                if (!isset($locations[$location])) {
                    $locations[$location] = array();
                }

                $locations[$location][] = array(
                    'type' => $type,
                    'buy' => $buy,
                    'sell' => $sell
                );
            }

            ?>
            <table class="tbl_style_embed">
                <thead>
                    <tr class="bg-f1">
                        <th class="fs-17 white-nowrap pd-left">Địa Phương</th>
                        <th class="fs-17 white-nowrap pd-left">Loại</th>
                        <th class="fs-17 white-nowrap">Mua Vào</th>
                        <th class="fs-17 white-nowrap">Bán Ra</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $row_number = 0;
                    foreach ($locations as $location => $types) {
                        $rowspan = count($types);
                        foreach ($types as $index => $type) {
                            ?>
                            <tr style="background-color: <?php echo $row_number % 2 == 0 ? '#fff' : '#f1f1f1'; ?>">
                                <?php if ($index === 0) { ?>
                                    <td rowspan="<?php echo $rowspan; ?>" class="fw-400 text-blue-light fs-17 pd-left"><?php echo $location; ?></td>
                                <?php } ?>
                                <td class="text-blue-light fs-17 pd-left"><?php echo $type['type']; ?></td>
                                <td class="text-right fs-17 pd-right"><?php echo $type['buy']; ?></td>
                                <td class="text-right fs-17 pd-right"><?php echo $type['sell']; ?></td>
                            </tr>
                            <?php
                            $row_number++;
                        }
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo 'Không có dữ liệu giá vàng từ API.';
        }
    } else {
        echo 'Không thể lấy dữ liệu từ API.';
    }
}
?>
