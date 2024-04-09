<?php
add_shortcode('shortcode_index_ty_gia', 'create_shortcode_index_ty_gia');
function create_shortcode_index_ty_gia()
{
    ob_start();

?>
    <div class="col-inner">
        <div id="text-1866575507" class="text overflow-auto text-black-cmt">
            <div>
                <div class="flex-end-center flex-wrap mb-10">
                    <p class="mb-0 fs-12 text-black-cmt right">Đơn vị: Việt Nam đồng</p>
                </div>
                <table class="exchange-rate-bank__table">
                    <thead>
                        <tr>
                            <th>Mã ngoại tệ</th>
                            <th>Tên ngoại tệ</th>
                            <th>Bán</th>
                            <th>Mua</th>
                            <th>Chuyển khoản</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $api_url = 'https://apichogia.viit.com.vn/api/json/ngan-hang?slug=vietcombank';
                        $data = file_get_contents($api_url);
                        $exchangeRates = json_decode($data, true);

                        $counter = 0; // Biến đếm

                        if (isset($exchangeRates['shows']) && is_array($exchangeRates['shows'])) {
                            foreach ($exchangeRates['shows'] as $rate) {
                                if ($counter < 9) { // Chỉ hiển thị 9 dòng dữ liệu
                                    echo '<tr>';
                                    echo '<td><img class="image-30-20" src="https://webtygia.com/storage/' . $rate['currency']['image'] . '">
                                        <span>' . strtoupper($rate['currency']['name']) . '</span></td>';
                                    echo '<td class="text-left text-blue-light">' . $rate['currency']['title'] . '</td>';
                                    echo '<td class="text-right">' . number_format($rate['sell'], 0, '.', '.').'</td>';
                                    echo '<td class="text-right">' . number_format($rate['buy'], 0, '.', '.').'</td>';
                                    echo '<td class="text-right">' . number_format($rate['transfer'], 0, '.', '.').'</td>';
                                    echo '</tr>';
                                    $counter++; // Tăng biến đếm sau mỗi lần hiển thị
                                } else {
                                    break; // Thoát khỏi vòng lặp nếu đã hiển thị đủ 9 dòng
                                }
                            }
                        } else {
                            echo '<tr><td colspan="5">Không có dữ liệu</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
<?php

    return ob_get_clean();
}
?>