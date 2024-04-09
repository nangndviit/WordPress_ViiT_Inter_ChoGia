<?php
add_shortcode('shortcode_date', 'create_shortcode_date');
function create_shortcode_date() {
    
    $current_time = current_time('d/m/Y');

    return $current_time;
}
?>
