<?php
add_shortcode('shortcode_ty_gia_AABank', 'create_shortcode_ty_gia');
function create_shortcode_ty_gia()
{
?>
    <div>
        <div class="rate text-left">
            <h3 class="text-black-cmt">Tỷ giá AABank</h3>
        </div>
        <div>
            <p class="unit text-right text-black-cmt fs-12">Đơn vị: Việt Nam đồng</p>
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
                        <td class="d-flex align-items-center gap-5">
                        <div class="cur-icon ci-usd"></div>
                        <span class="icons_text">USD</span>
                    </td>
                    <td><span>1.899</span></td>
                    <td><span>1.900</span></td>
                </tr>
                <tr>
                    <td class="d-flex align-items-center gap-5">
                        <div class="cur-icon ci-jpy"></div>
                        <span class="icons_text">JPY</span>
                    </td>
                    <td><span>160</span></td>
                    <td><span>168</span></td>
                </tr>
                <tr>
                    <td class="d-flex align-items-center gap-5">
                        <div class="cur-icon ci-eur"></div>
                        <span class="icons_text">EUR</span>
                    </td>
                    <td><span>26.149</span></td>
                    <td><span>27.282</span></td>
                </tr>
                <tr>
                    <td class="d-flex align-items-center gap-5">
                        <div class="cur-icon ci-chf"></div>
                        <span class="icons_text">CHF</span>
                    </td>
                    <td><span>0</span></td>
                    <td><span>28.779</span></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
}
?>
