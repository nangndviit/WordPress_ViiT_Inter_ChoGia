<?php
add_shortcode('shortcode_gia_vang_trong_nuoc', 'create_shortcode_gia_vang_trong_nuoc');
function create_shortcode_gia_vang_trong_nuoc()
{
?>
     <div class="board-price bg-light">
        <div class="rate">
            <h3 class="text-black-cmt">Giá vàng trong nước</h3>
        </div>
        <div>
            <p class="mb-0 text-black">Đơn vị: Việt Nam đồng</p>
        </div>

        <table class="rate_table_abank">
            <thead>
                <tr>
                    <th class="pl-5px nowrap">Hệ Thống</th>
                    <th>Mua</th>
                    <th>Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle gap-5">
                        <span class="icons_text">SJC</span>
                    </td>
                    <td><span>24.700</span></td>
                    <td><span>25.050</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">VÀNG NHÂN</span>
                    </td>
                    <td><span>5.500.900</span></td>
                    <td><span>7.000.900</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">AVPL</span>
                    </td>
                    <td><span>5.500.900</span></td>
                    <td><span>7.000.900</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">SJC</span>
                    </td>
                    <td><span>5.500.900</span></td>
                    <td><span>7.000.900</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">SJC</span>
                    </td>
                    <td><span>5.500.900</span></td>
                    <td><span>7.000.900</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">SJC</span>
                    </td>
                    <td><span>5.500.900</span></td>
                    <td><span>7.000.900</span></td>
                </tr>
            </tbody>

        </table>
    </div>

    
<?php
}
?>