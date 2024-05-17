<?php 
/*
** Woocommerce shop / category page
*/
if(!class_exists('WC_Archive_SN')){
    class WC_Archive_SN{

        public function __construct(){
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
            remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
            // remove coupon from checkout page
            // remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

            add_filter( 'woocommerce_breadcrumb_defaults', array( $this , 'wps_breadcrumb_delimiter') );
            add_filter( 'woocommerce_pagination_args',  array($this, 'custom_pagination_arrows') );

            // Add text on checkout page in header area
            add_action('woocommerce_before_checkout_form' , array($this , 'add_support_email_info') , 1);

        }

        /*
		** Change breadcrumb delimiter
	    */
	    public function wps_breadcrumb_delimiter( $defaults ) {
		  $defaults['delimiter'] = ' > ';
		  return $defaults;
		}

        /*
        ** Custom pagination arrows
        */
        public function custom_pagination_arrows( $args ){
            $args['prev_text'] = '<svg xmlns="http://www.w3.org/2000/svg" height="12"  viewBox="0 0 320 512"><path  fill="#000" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>';
            $args['next_text'] = '<svg xmlns="http://www.w3.org/2000/svg" height="12"  viewBox="0 0 320 512"><path  fill="#000" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>';

            return $args;
        }

        /*
        ** Add support email info
        */
        public function add_support_email_info() {
            $support_email = '<p class="support-email-checkout">' . 
                             __('Please email us at ', 'web14devsn') . 
                             '<a href="mailto:support@rawgenetics.io">support@rawgenetics.io</a>' . 
                             __(' if you need assistance with checkout', 'web14devsn') . 
                             '</p>';
            echo $support_email;
        }


    }

    function initialize_wc_archive_sn() {
        $WC_Archive_SN = new WC_Archive_SN();
    }

    add_action('init', 'initialize_wc_archive_sn');
}

