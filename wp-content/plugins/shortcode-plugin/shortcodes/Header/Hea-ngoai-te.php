<?php
add_shortcode('shortcode_hea_ngoai_te_cac_banks', 'create_shortcode_hea_ngoai_te_cac_banks');
function create_shortcode_hea_ngoai_te_cac_banks()
{
    // Lấy dữ liệu từ API
    $api_url = 'https://apichogia.viit.com.vn/api/json/only_currency';
    $response = wp_remote_get($api_url);

    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response); 
        $currency_data = json_decode($body, true); 

        if (is_array($currency_data) && isset($currency_data['currency']) && is_array($currency_data['currency'])) {
            $currencies = $currency_data['currency']; 

            if (!empty($currencies)) {
                ?>
                <div class="exchange-rate__table bg-light">

                    <table class="hea_domeGaso">
                        <thead>
                        <tr>
                            <th>Ngoại tệ</th>
                            <th>Tên đầy đủ</th>
                            <th>Giá mua</th>
                            <th>Giá bán</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($currencies as $currency) : ?>
                            <tr>
                                <td class="ps-3">
                                    <a href="#">
                                        <div class="flex gap-5">
                                            <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php echo isset($currency['image']) ? $currency['image'] : ''; ?>">
                                            <span><?php echo isset($currency['name']) ? strtoupper($currency['name']) : ''; ?></span>
                                        </div>
                                    </a>
                                </td>
                                <td><?php echo isset($currency['title']) ? $currency['title'] : ''; ?></td>
                                <td class="curren_text"><?php echo isset($currency['rate_first']['buy']) ? number_format($currency['rate_first']['buy'], 0, ',', '.') : ''; ?></td>
                                <td class="curren_text"><?php echo isset($currency['rate_first']['sell']) ? number_format($currency['rate_first']['sell'], 0, ',', '.') : ''; ?></td>
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
            echo "Dữ liệu từ API không hợp lệ hoặc không có dữ liệu về tỷ giá ngoại tệ.";
        }
    } else {
        echo "Không thể lấy dữ liệu từ API.";
    }
}
?>
