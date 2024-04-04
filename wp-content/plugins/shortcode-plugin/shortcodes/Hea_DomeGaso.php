<?php
add_shortcode('shortcode_hea_gia_xang_dau_trong_nuoc', 'create_shortcode_hea_gia_xang_dau_trong_nuoc');
function create_shortcode_hea_gia_xang_dau_trong_nuoc()
{
    // Lấy dữ liệu từ API
    $api_url = 'https://apichogia.viit.com.vn/api/json/xang-dau';
    $response = wp_remote_get($api_url);

    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response); 
        $fuel_prices = json_decode($body, true); 

        if (is_array($fuel_prices) && isset($fuel_prices['oil_todays']) && is_array($fuel_prices['oil_todays'])) {
            $oil_today_data = $fuel_prices['oil_todays']; // Lấy dữ liệu từ thuộc tính 'oil_todays'

            if (!empty($oil_today_data)) {
                ?>
                <div class="board_hea_domeGaso bg-light">
                    <div class="rate">
                        <h3></h3>
                    </div>
                    <div>
                        <p class="mb-0 text-black">Đơn vị: Việt Nam đồng</p>
                    </div>

                    <table class="hea_domeGaso">
                        <thead>
                            <tr>
                                <th class="pl-5px nowrap product-column">Sản Phẩm</th>
                                <th class="region-column">Vùng 1</th>
                                <th class="region-column">Vùng 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($oil_today_data as $fuel) : ?>
                                <tr>
                                    <td class="align-middle gap-5">
                                        <span class="icons_text"><?php echo isset($fuel['oil']['title']) ? $fuel['oil']['title'] : ''; ?></span>
                                    </td>
                                    <td class="region-data"><span><?php echo isset($fuel['price_2']) ? $fuel['price_2'] : ''; ?></span></td>
                                    <td class="region-data"><span><?php echo isset($fuel['price_1']) ? $fuel['price_1'] : ''; ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php
            } else {
                echo "Dữ liệu từ API không hợp lệ hoặc không có dữ liệu.";
            }
        } else {
            echo "Dữ liệu từ API không hợp lệ hoặc không có dữ liệu về giá xăng dầu.";
        }
    } else {
        echo "Không thể lấy dữ liệu từ API.";
    }
}
?>
