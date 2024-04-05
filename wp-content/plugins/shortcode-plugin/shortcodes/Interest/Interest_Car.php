<?php
add_shortcode('shortcode_vay_mua_xe', 'create_shortcode_vay_mua_xe');
function create_shortcode_vay_mua_xe()
{
?>
     <div class="interest-rate__wrapper">
        <table class="interest-rate__table">
            <thead style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                <tr>
                    <th rowspan="2" class="sticky-col"
                        style="padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">Ngân hàng</th>
                    <th style="text-align: center; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);"
                        colspan="11">Kỳ hạn</th>
                </tr>
                <tr>
                    <th>6 tháng</th>
                    <th>9 tháng</th>
                    <th>12 tháng</th>
                    <th>18 tháng</th>
                    <th>2 năm</th>
                    <th>3 năm</th>
                    <th>4 năm</th>
                    <th>5 năm</th>
                    <th>6 năm</th>
                    <th>7 năm</th>
                    <th>8 năm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="sticky-col"
                        style="display: flex; align-items: center; gap: 10px; padding: 5px; font-size: 16px; background-color: rgb(255, 255, 255);">
                        <img class="image-16"
                            src="https://webtygia.com/storage/images/4d11b6c3b74b7bda27bcd3a6446d5ea7.png"><span>LIENVIETPOSTBANK</span>
                    </td>
                    <td>
                        --</td>
                    <td>
                        --</td>
                    <td>
                        --</td>
                    <td>
                        --</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                    <td>
                        8.00</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
