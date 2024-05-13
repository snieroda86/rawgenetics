<?php 
/*
** Woocommerce shop / category page
*/
if(!class_exists('WC_Archive_SN')){
    class WC_Archive_SN{

        public function __construct(){
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

            add_filter( 'woocommerce_breadcrumb_defaults', array( $this , 'wps_breadcrumb_delimiter') );

        }

        /*
		** Change breadcrumb delimiter
	    */
	    public function wps_breadcrumb_delimiter( $defaults ) {
		  $defaults['delimiter'] = ' > ';
		  return $defaults;
		}
    }

    function initialize_wc_archive_sn() {
        $WC_Archive_SN = new WC_Archive_SN();
    }

    add_action('init', 'initialize_wc_archive_sn');
}

