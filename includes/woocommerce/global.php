<?php
/*
** CART count update via AJAX
*/
add_filter( 'woocommerce_add_to_cart_fragments', 'web14_cart_count_fragments', 10, 1 );

function web14_cart_count_fragments( $fragments ) {
    
    $fragments['#cart-count-num'] = '<span id="cart-count-num">' . WC()->cart->get_cart_contents_count() . '<span>';
    
    return $fragments;
    
}