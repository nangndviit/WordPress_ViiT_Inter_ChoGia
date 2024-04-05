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
        <table class="world_gasoline">
            <thead>
                <tr>
                    <th>Sản Phẩm</th>
                    <th>Vùng 1</th>
                    <th>Vùng 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><span>E5 RON 92-II</span></td>
                    <td class="text-right"><span>24090.00</span></td>
                    <td class="text-right"><span>23620.00</span></td>
                </tr>
                <tr>
                    <td><span>E5 RON 92-II</span></td>
                    <td class="text-right"><span>24090.00</span></td>
                    <td class="text-right"><span>23620.00</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
