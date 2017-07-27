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

/**
 * disable the password strength check
 **/
function wc_ninja_remove_password_strength() {
	if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
		wp_dequeue_script( 'wc-password-strength-meter' );
	}
}
add_action( 'wp_print_scripts', 'wc_ninja_remove_password_strength', 100 );
