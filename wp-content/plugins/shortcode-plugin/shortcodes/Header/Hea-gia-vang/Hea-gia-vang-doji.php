<?php
add_shortcode('shortcode_gia_vang', 'create_shortcode_gia_vang');
function create_shortcode_gia_vang()
{
    ?>
    <table class="tbl_style_embed">
        <thead>
            <tr>
                <th>Địa phương</th>
                <th style="min-width: 200px">Loại</th>
                <th>Mua Vào</th>
                <th>Bán Ra</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="5" class="fw-400 text-blue-light">Hà Nội</td>
                <td class="text-blue-light">Vàng miếng SJC - SJC</td>
                <td class="text-right">
                    66.450.000
                </td>
                <td class="text-right">
                    67.050.000
                </td>
            </tr>
            <tr>
                <td class="text-blue-light">VÀNG TS 98 - KHÁC - 098</td>
                <td class="text-right">
                    50.900.000
                </td>
                <td class="text-right">
                    52.200.000
                </td>
            </tr>
            <tr>
                <td class="text-blue-light">VÀNG TS 98 - PHÚ QUÝ - 098PQ</td>
                <td class="text-right">
                    54.194.000
                </td>
                <td class="text-right">
                    55.174.000
                </td>
            </tr>
            <tr>
                <td class="text-blue-light">VÀNG TS 99 - KHÁC - 099</td>
                <td class="text-right">
                    0
                </td>
                <td class="text-right">
                    0
                </td>
            </tr>
            <tr>
                <td class="text-blue-light">VÀNG TS 99 - PHÚ QUÝ - 099PQ</td>
                <td class="text-right">
                    54.747.000
                </td>
                <td class="text-right">
                    55.737.000
                </td>
            </tr>
            <tr>
                <td class="fw-400 text-blue-light">Hà Nội</td>
                <td class="text-blue-light">VÀNG TS 999 - KHÁC - 999</td>
                <td class="text-right">
                    54.500.000
                </td>
                <td class="text-right">
                    55.500.000
                </td>
            </tr>
            <tr>
                <td class="fw-400 text-blue-light">Hà Nội</td>
                <td class="text-blue-light">VÀNG TS 999 - KHÁC - 99911</td>
                <td class="text-right">
                    54.500.000
                </td>
                <td class="text-right">
                    55.500.000
                </td>
            </tr>
        </tbody>
    </table>
    <?php
}
?>
