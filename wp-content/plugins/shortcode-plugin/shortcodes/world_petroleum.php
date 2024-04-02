<?php
add_shortcode('shortcode_gia_xang_the_gioi', 'create_shortcode_gia_xang_the_gioi');
function create_shortcode_gia_xang_the_gioi()
{
?>
    <div>
        <div class="rate">
            <h3>Giá xăng dầu thể giới</h3>
        </div>
        <div>
            <p class="unit">Đơn vị: Việt Nam đồng</p>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Vùng 1</th>
                    <th>Vùng 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>E5 RON 92-II</td>
                    <td class="text-right">24090.00</td>
                    <td class="text-right">23620.00</td>
                </tr>
                <tr>
                    <td>E5 RON 92-II</td>
                    <td class="text-right">24090.00</td>
                    <td class="text-right">23620.00</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
