<?php 
/*
** Woocommerce products 
*/
if(!class_exists('WC_Product_SN')){
	class WC_Product_SN{

		public function __construct(){
			add_action('woocommerce_shop_loop_item_title' , array( $this , 'show_category_on_product_loop'), 20, 1);
			
		}

		/*
        ** Display product category name with a link
        */
       public function show_category_on_product_loop($title){
			global $product;
            $product_categories = get_the_terms($product->get_id(), 'product_cat');

            if ($product_categories && !is_wp_error($product_categories)) {
                foreach ($product_categories as $category) {
                    echo '<h4 class="product-loop-cat-name">' . $category->name . '</h4>';
                }
            }
		}

	}

	$WC_Product_SN = new WC_Product_SN();
}
