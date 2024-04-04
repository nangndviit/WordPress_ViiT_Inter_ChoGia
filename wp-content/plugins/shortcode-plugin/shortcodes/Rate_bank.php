<?php
add_shortcode('shortcode_rate_bank', 'create_shortcode_rate_bank');
function create_shortcode_rate_bank()
{
    // Lấy dữ liệu từ API
    $api_url = 'https://apichogia.viit.com.vn/api/json/only_bank';
    $response = wp_remote_get($api_url);

    // Kiểm tra nếu có dữ liệu từ API
    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response); 
        $banks = json_decode($body, true); 

        // Kiểm tra xem $banks có phải là một mảng không trước khi truy cập vào thuộc tính 'bank'
        if (is_array($banks) && isset($banks['bank']) && is_array($banks['bank'])) {
            $bank_data = $banks['bank']; // Lấy dữ liệu từ thuộc tính 'bank'

            // Kiểm tra nếu dữ liệu về ngân hàng không rỗng
            if (!empty($bank_data)) {
                ?>
                <table class="exchange-rate__table">
                    <thead>
                        <tr>
                            <th>Ngân hàng</th>
                            <th>Tên đầy đủ</th>
                            <th>Mã ngân hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bank_data as $bank) : ?>
                            <tr>
                                <td class="ps-3">
                                    <a href="#">
                                        <div class="flex gap-5">
                                            <img decoding="async" class="image-16" src="https://webtygia.com/storage/<?php echo isset($bank['image']) ? $bank['image'] : ''; ?>">
                                            <span><?php echo isset($bank['short_name']) ? $bank['short_name'] : ''; ?></span>
                                        </div>
                                    </a>
                                </td>
                                <td><?php echo isset($bank['name']) ? $bank['name'] : ''; ?></td>
                                <td><?php echo isset($bank['code']) ? $bank['code'] : ''; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php
            } else {
                echo "Không có dữ liệu về ngân hàng.";
            }
        } else {
            echo "Dữ liệu từ API không hợp lệ hoặc không có dữ liệu về ngân hàng.";
        }
    } else {
        echo "Không thể lấy dữ liệu từ API.";
    }
}
?>
