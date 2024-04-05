<?php
add_shortcode('shortcode_gia_AABank', 'create_shortcode_gia_AABank');
function create_shortcode_gia_AABank()
{
?>
     <div class="board-price bg-light">
        <div class="contai">
            <div class="left flex-end-center">
                <h3 class="widget-price-title" data-metatip="true">Tỷ giá AABank</h3>
            </div>
            <div class="right">
                <div class="text-container flex-end-center">
                    <p class="mb-0 fs-12 text-black">Đơn vị: Việt Nam đồng</p>
                </div>
            </div>
        </div>

        <table class="rate_table_abank">
            <thead>
                <tr>
                    <th class="pl-5px" width="50%">Ngoại tệ</th>
                    <th width="25%">Mua</th>
                    <th width="25%">Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle gap-5">
                        <div class="cur-icon ci-usd"></div>
                        <span class="icons_text">USD</span>
                    </td>
                    <td><span>24.700</span></td>
                    <td><span>25.050</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <div class="cur-icon ci-jpy"></div>
                        <span class="icons_text">JPY</span>
                    </td>
                    <td><span>160</span></td>
                    <td><span>168</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <div class="cur-icon ci-eur"></div>
                        <span class="icons_text">EUR</span>
                    </td>
                    <td><span>26.149</span></td>
                    <td><span>27.282</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <div class="cur-icon ci-chf"></div>
                        <span class="icons_text">CHF</span>
                    </td>
                    <td><span>0</span></td>
                    <td><span>28.779</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <div class="cur-icon ci-gbp"></div>
                        <span class="icons_text">GBP</span>
                    </td>
                    <td><span>30.578</span></td>
                    <td><span>31.774</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <div class="cur-icon ci-aud"></div>
                        <span class="icons_text">AUD</span>
                    </td>
                    <td><span>15.808</span></td>
                    <td><span>16.460</span></td>
                </tr>
            </tbody>

        </table>
    </div>

    
<?php
}
?>
