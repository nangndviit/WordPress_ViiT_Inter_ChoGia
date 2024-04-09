<?php
/*
Plugin Name: Shortcode Tutorial by Admin
Plugin Author: ad
*/

//------- Ngày tháng năm -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Date/date.php';

//------- tỷ giá AABank -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/exchange_AABank.php';

//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/world_gold.php';

//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/world_petroleum.php';

//------- Tỷ giá AABank 2 -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/right/rate_AABank.php';

//------- Index tỷ giá -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Ty_Gia/index.php';

//------- Giá vàng trong nước -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/right/Domestic_gold.php';

//------- Giá xăng dầu trong nước -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/right/Domestic_gasoline.php';

//------- Header Tỷ giá ngân hàng hôm nay -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea_ty-gia.php';

//------- Header Giá xăng dầu hôm nay -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea-gia-xang-dau-hom-nay.php';

//------- Header ngoại tệ -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea-ngoai-te.php';

//------- Header giá vàng Doji -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea-gia-vang/Hea-gia-vang-doji.php';

//------- Header giá vàng Sjc -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea-gia-vang/Hea-gia-vang-sjc.php';

//------- Header giá vàng Pnj -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Hea-gia-vang/Hea-gia-vang-pnj.php';

//------- Vay Mua Xe -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Interest/Interest_Car.php';

//------- Vay Mua Nhà Đất -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Interest/Interest_Realestate.php';

//------- Vay Tín Chất -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Header/Interest/Interest_Unsecured.php';