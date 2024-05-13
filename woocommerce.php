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
            <div class="woocommerce-page-header-sn">
                <?php woocommerce_breadcrumb(); ?>
            </div>
        </div>
        <div class="row">
            <?php
            if (is_shop() || is_product_category()) :
                
                ?>
                <div class="shop-sidebar-sn">
                    <!-- Categories -->
                    <?php  get_template_part('template-parts/woocommerce/product-categories'); ?>

                    <?php if ( is_active_sidebar( 'sidebar-shop' ) ) { ?>
                       
                        <?php dynamic_sidebar('sidebar-shop'); ?>
                       
                    <?php } ?>
                </div>
            <?php endif; ?>

            <div class="<?php echo is_shop() || is_product_category() ? 'shop-content-sn' : 'col-12'; ?>">

                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php get_footer();
