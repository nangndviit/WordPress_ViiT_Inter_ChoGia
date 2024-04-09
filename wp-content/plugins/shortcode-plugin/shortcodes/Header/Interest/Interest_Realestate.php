<?php
add_shortcode('shortcode_vay_mua_nha_dat', 'create_shortcode_vay_mua_nha_dat');
function create_shortcode_vay_mua_nha_dat()
{
    // Lấy dữ liệu từ API về lãi suất
    $api_url = 'https://apichogia.viit.com.vn/api/json/lai-suat?slug=vay-mua-nha-dat';
    $response = wp_remote_get($api_url);

    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        // Kiểm tra xem có dữ liệu hay không
        if ($data && isset($data['success']) && $data['success'] && isset($data['rates'])) {
            $rates = $data['rates'];
            $time_savings = $data['time_savings'];

            ?>
            <div class="interest-rate__wrapper">
                <table class="interest-rate__table">
                    <thead style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                        <tr>
                            <th rowspan="2" class="sticky-col" style="padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">Ngân hàng</th>
                            <th style="text-align: center; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);" colspan="<?php echo count($time_savings); ?>">Kỳ hạn</th>
                        </tr>
                        <tr>
                            <?php foreach ($time_savings as $term) : ?>
                                <th class="text-center bg-f1"><?php echo isset($term['name']) ? $term['name'] : ''; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row_count = 0;
                        foreach ($rates as $bank_name => $bank_data) {
                            $row_count++;
                            ?>
                            <tr <?php if ($row_count % 2 == 0) echo 'style="background-color: #f1f1f1;"'; ?>>
                                <td class="sticky-col" style="display: flex; align-items: center; gap: 10px; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">
                                    <?php
                                    $bank_images = array();
                                    foreach ($bank_data as $term_data) {
                                        $image_added = false;
                                        foreach ($term_data as $term) {
                                            $image_url = isset($term['bank']['image']) ? $term['bank']['image'] : '';
                                            if (!empty($image_url) && !$image_added) {
                                                $bank_images[1] = $image_url;
                                                $image_added = true;
                                            }
                                        }
                                    }

                                    foreach ($bank_images as $image) {
                                        echo '<img class="image-16" src="https://webtygia.com/storage/' . $image . '">';
                                    }

                                    ?>
                                    <span class="bank_name_data"><?php echo $bank_name; ?></span>
                                </td>
                                <?php
                                foreach ($time_savings as $term) {
                                    ?>
                                    <td>
                                        <?php
                                        $rate = isset($bank_data[$term['value']][0]['loan_rate']) ? $bank_data[$term['value']][0]['loan_rate'] : '--';
                                        echo ($rate !== '--' ? number_format($rate, 2) . '' : $rate);
                                        ?>
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
        }
    } else {
        echo 'Không thể lấy dữ liệu từ API.';
    }
}
?>