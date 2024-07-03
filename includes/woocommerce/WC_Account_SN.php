<?php
/*
** Woocommerce my account page
*/
if (!class_exists('WC_Account_SN')) {
    class WC_Account_SN {

        public function __construct() {
            add_filter('query_vars', array($this, 'add_premium_client_area_query_vars'));
            add_filter('woocommerce_account_menu_items', array($this, 'sn_add_premium_client_area_link_my_account'));
            add_action('woocommerce_account_client-premium-area_endpoint', array($this, 'sn_add_premium_client_area_content'));
        }

        /*
        ** Add custom endpoint
        */
        public static function sn_add_premium_client_area_endpoint() {
            add_rewrite_endpoint('client-premium-area', EP_ROOT | EP_PAGES);
        }

        /*
        ** Add query vars
        */
        public function add_premium_client_area_query_vars($vars) {
            $vars[] = 'client-premium-area';
            return $vars;
        }

        /*
        ** Add endpoint into the My Account menu
        */
        public function sn_add_premium_client_area_link_my_account($items) {
            $items['client-premium-area'] = 'Premium Area';
            return $items;
        }

        /*
        ** Add content to the new tab
        */
        public function sn_add_premium_client_area_content() {
           include_once get_template_directory().'/woocommerce/myaccount/premium-client-area.php';
        }

    }

    function initialize_wc_account_sn() {
        // Sprawdzenie, czy WooCommerce jest aktywne
        if (class_exists('WooCommerce')) {
            $WC_Account_SN = new WC_Account_SN();
            // Call the static method to ensure the endpoint is registered
            WC_Account_SN::sn_add_premium_client_area_endpoint();
        }
    }

    add_action('init', 'initialize_wc_account_sn'); // Używamy 'init' do inicjalizacji
}
?>
