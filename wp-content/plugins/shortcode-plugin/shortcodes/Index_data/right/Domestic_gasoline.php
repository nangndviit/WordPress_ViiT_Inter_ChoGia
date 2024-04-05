<?php
add_shortcode('shortcode_gia_xang_dau_trong_nuoc', 'create_shortcode_gia_xang_dau_trong_nuoc');
function create_shortcode_gia_xang_dau_trong_nuoc()
{
?>
     <div class="board-price bg-light">
        <div class="rate">
            <h3>Giá xăng hôm nay</h3>
        </div>
        <div>
            <p class="mb-0 text-black">Đơn vị: Việt Nam đồng</p>
        </div>

        <table class="rate_table_abank">
            <thead>
                <tr>
                    <th class="pl-5px nowrap" width="40%">Sản Phẩm</th>
                    <th width="30%">Vùng 1</th>
                    <th width="30%">Vùng 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="align-middle gap-5">
                        <span class="icons_text">E5 RON 92-II</span>
                    </td>
                    <td><span>23.620</span></td>
                    <td><span>24.090</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">DO 0,001S-V</span>
                    </td>
                    <td><span>21.320</span></td>
                    <td><span>21.740</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">DO 0,05S-II</span>
                    </td>
                    <td><span>20.690</span></td>
                    <td><span>21.100</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">RON 95-III</span>
                    </td>
                    <td><span>24.810</span></td>
                    <td><span>25.300</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">HỎA 2-K</span>
                    </td>
                    <td><span>20.870</span></td>
                    <td><span>21.280</span></td>
                </tr>
                <tr>
                    <td class="d-inline-flex align-items-center gap-5">
                        <span class="icons_text">RON 95-IV</span>
                    </td>
                    <td><span>26.380</span></td>
                    <td><span>26.900</span></td>
                </tr>
            </tbody>

        </table>
    </div>
    
<?php
}
?>


