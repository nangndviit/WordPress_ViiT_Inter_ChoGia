<?php
/*
Plugin Name: Shortcode Tutorial by Admin
Plugin Author: ad
*/

//------- tỷ giá AABank -------//
include plugin_dir_path(__FILE__) . 'shortcodes/exchange_AABank.php';


//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/world_gold.php';

//------- Giá vàng thể giới -------//
include plugin_dir_path(__FILE__) . 'shortcodes/world_petroleum.php';

//------- Tỷ giá AABank 2 -------//
include plugin_dir_path(__FILE__) . 'shortcodes/rate_AABank.php';

//------- Giá vàng trong nước -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Domestic_gold.php';

//------- Giá xăng dầu trong nước -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Domestic_gasoline.php';

//------- Tỷ giá ngân hàng hôm nay -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Rate_bank.php';

//------- Header Giá xăng dầu hôm nay -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Hea_DomeGaso.php';

//------- Header ngoại tệ -------//
include plugin_dir_path(__FILE__) . 'shortcodes/Foreign_currency_Bank.php';