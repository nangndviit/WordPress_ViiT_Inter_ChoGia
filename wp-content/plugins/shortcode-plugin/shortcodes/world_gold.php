<?php
add_shortcode('shortcode_gia_vang_the_gioi', 'create_shortcode_gia_vang_the_gioi');
function create_shortcode_gia_vang_the_gioi()
{
?>
    <div>
        <div class="rate">
            <h3>Giá vàng thế giới</h3>
        </div>
        <div>
            <p class="unit">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="gold_world">
            <thead>
                <tr>
                    <th></th>
                    <th>Giá Mua</th>
                    <th>Giá Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="text-right"><span>1.899</span></td>
                    <td class="text-right"><span>1.900</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
