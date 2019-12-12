<?php
/* 
Plugin Name: ShortCodePlugin
Version: 1.0
*/
add_shortcode('t', 'shortcode');
function shortcode($content) {
    $display = '<a href="http://www.bookstore.com/">www.bookie.com </a>';
    // $display = '<button onclick="window.location.href =';
    // $display .= "'https://www.google.com/';";
    // $display .= '">Click here</button>';
    return $display;
}
 
?>