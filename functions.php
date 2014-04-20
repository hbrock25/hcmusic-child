<?php

/**
 * Change variable price display to show range, rather than the minimum price.
 **/
add_filter('woocommerce_variable_price_html', 'custom_variation_price', 10, 2);
 
function custom_variation_price( $price, $product ) {
     
     $price = '';
     $price .= woocommerce_price($product->max_variation_price);
     return $price;

}
