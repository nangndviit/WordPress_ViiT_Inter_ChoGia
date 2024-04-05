<?php
add_shortcode('shortcode_ty_gia_AABank', 'create_shortcode_ty_gia');
function create_shortcode_ty_gia()
{
?>
    <div>
        <div class="rate left">
            <h3>Tỷ giá AABank</h3>
        </div>
        <div>
            <p class="unit">Đơn vị: Việt Nam đồng</p>
        </div>
        <table class="rate_abank">
            <thead>
                <tr>
                    <th>Ngoại Tệ</th>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="img-currency">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
                <tr>
                    <td class="img-currency">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
                <tr>
                    <td class="img-currency">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
                <tr>
                    <td class="img-currency">
                        <div class="cur-icon ci-usd"></div>
                        <span>USD</span>
                    </td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
