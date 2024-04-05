<?php
/*
Plugin Name: Shortcode Tutorial by Admin
Plugin Author: ad
*/

//------- tỷ giá AABank -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/exchange_AABank.php';


//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/world_gold.php';

//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/left/world_petroleum.php';

//------- Tỷ giá AABank 2 -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Index_data/right/rate_AABank.php';

//------- Index tỷ giá -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Exchange_Rate/index.php';

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

//------- Vay Mua Xe -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Interest/Interest_Car.php';