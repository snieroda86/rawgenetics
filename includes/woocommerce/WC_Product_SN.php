<?php 
/*
** Woocommerce products 
*/
if(!class_exists('WC_Product_SN')){
	class WC_Product_SN{

		public function __construct(){
			add_action('woocommerce_shop_loop_item_title' , array( $this , 'show_category_on_product_loop'), 20, 1);
			add_action('woocommerce_single_product_summary' , array( $this , 'add_thc_info_after_add_to_cart') , 35);
			add_filter( 'woocommerce_product_tabs', array($this , 'sn_remove_description_tab') , 11 );
			
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

		/*
		** THC concentration info
		*/
		public function add_thc_info_after_add_to_cart(){
			echo '<div class="thc-con-info-sp"><p>All Seeds are considered HEMP Seeds by law. Every seed tested contained less than 0.03% THC</p> </div>';
		}

		/*
		** Remove product tabs
		*/
		public function sn_remove_description_tab( $tabs ) {
			unset( $tabs['reviews'] );
			unset( $tabs['additional_information'] );
			return $tabs;
		}

	}

	$WC_Product_SN = new WC_Product_SN();
}
