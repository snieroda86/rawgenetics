<?php
/*
** CART count update via AJAX
*/
add_filter( 'woocommerce_add_to_cart_fragments', 'web14_cart_count_fragments', 10, 1 );

function web14_cart_count_fragments( $fragments ) {
    
    $fragments['#cart-count-num'] = '<span id="cart-count-num">' . WC()->cart->get_cart_contents_count() . '<span>';
    
    return $fragments;
    
}

/**
 * Display wallet address custom field
 */
function web14_create_custom_field() {
 $args = array(
 'id' => 'wallet_address_field_title',
 'label' => __( 'Wallet address', 'web14' ),
 'class' => 'web14-custom-field',
 'desc_tip' => true,
 'description' => __( 'Enter the title of your custom text field.', 'ctwc' ),
 );
 woocommerce_wp_text_input( $args );
}
add_action( 'woocommerce_product_options_general_product_data', 'web14_create_custom_field' );

/**
 * Save the custom field
 */
function web14_save_custom_field( $post_id ) {
 $product = wc_get_product( $post_id );
 $title = isset( $_POST['wallet_address_field_title'] ) ? $_POST['wallet_address_field_title'] : '';
 $product->update_meta_data( 'wallet_address_field_title', sanitize_text_field( $title ) );
 $product->save();
}
add_action( 'woocommerce_process_product_meta', 'web14_save_custom_field' );



/**
 * Display custom field on the front end
 */
function web14_display_custom_field() {
     global $post;
     // Check for the custom field value
     $product = wc_get_product( $post->ID );
     $title = $product->get_meta( 'wallet_address_field_title' );
     if( $title ) {
     // Only display our field if we've got a value for the field title
         printf(
         '<div class="web14-custom-field-wrapper"><label for="web14-title-field">%s</label><input type="text" id="web14-title-field" name="web14-title-field" value=""></div>',
         esc_html( $title )
         );
     }
}
add_action( 'woocommerce_before_add_to_cart_button', 'web14_display_custom_field' );


/**
 * Validate the text field
 */
// function web14_validate_custom_field( $passed, $product_id, $quantity ) {
//  if( empty( $_POST['web14-title-field'] ) ) {
//  // Fails validation
//  $passed = false;
//  wc_add_notice( __( 'Please enter a value into the text field', 'web14' ), 'error' );
//  }
//  return $passed;
// }
// add_filter( 'woocommerce_add_to_cart_validation', 'web14_validate_custom_field', 10, 3 );

/**
 * Add the text field as item data to the cart object
 */
function web14_add_custom_field_item_data( $cart_item_data, $product_id, $variation_id, $quantity ) {
    // Check if the product is a free gift
    if ( class_exists( 'WC_Free_Gifts' ) && WC_Free_Gifts::instance()->gifts->is_free_gift( $product_id ) ) {
        return $cart_item_data; // Don't add custom field for free gifts
    }

    if ( ! empty( $_POST['web14-title-field'] ) ) {
        // Add the item data
        $cart_item_data['title_field'] = sanitize_text_field( $_POST['web14-title-field'] );
    }
    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'web14_add_custom_field_item_data', 10, 4 );



/**
 * Display the custom field value in the cart
 */
function web14_cart_item_name( $name, $cart_item, $cart_item_key ) {
    // Check if the product is a free gift
    if ( class_exists( 'WC_Free_Gifts' ) && WC_Free_Gifts::instance()->gifts->is_free_gift( $cart_item['product_id'] ) ) {
        return $name; // Don't modify name for free gifts
    }

    if ( isset( $cart_item['title_field'] ) ) {
        $name .= sprintf(
            '<p>%s</p>',
            esc_html( $cart_item['title_field'] )
        );
    }
    return $name;
}
add_filter( 'woocommerce_cart_item_name', 'web14_cart_item_name', 10, 3 );




/**
 * Add custom field to order object
 */
function web14_add_custom_data_to_order( $item, $cart_item_key, $values, $order ) {
 foreach( $item as $cart_item_key=>$values ) {
 if( isset( $values['title_field'] ) ) {
 $item->add_meta_data( __( 'Wallet address', 'web14' ), $values['title_field'], true );
 }
 }
}
add_action( 'woocommerce_checkout_create_order_line_item', 'web14_add_custom_data_to_order', 10, 4 ); 