<?php
/**
 * The template for displaying all WooCommerce pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container-lg">
        <div class="row">
            <?php

            if (is_shop() || is_product_category()) :
                
                ?>
                <div class="shop-sidebar-sn">
                    <h4>Categories list</h4>
                    <?php // echo do_shortcode('[categories_sidebar_sn]'); ?>
                </div>
            <?php endif; ?>

            <div class="<?php echo is_shop() || is_product_category() ? 'shop-content-sn' : 'col-12'; ?>">
                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php get_footer();
