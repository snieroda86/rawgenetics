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
                <!-- Category header -->
                <?php if(is_product_category()): ?>
                    <h1><?php echo single_term_title() ?></h1>
                    <?php
                    if ( is_product_category() ) {
                        $term = get_queried_object();
                        if ( $term && ! empty( $term->description ) ) {
                            echo '<div class="woocommerce-archive-description">' . wpautop( wp_kses_post( $term->description ) ) . '</div>';
                        }
                    }
                    ?>


                <?php endif; ?>
                <!-- Shop banner -->
                <div class="shop-info-banner" style="background-image: url(<?php echo PATH_SN ?>/uploads/shop-banner-bg.jpg);background-size: cover;background-position: center;">
                    <div class="shop-info-banner-inner">
                        <div class="d-flex">
                            <div class="shop-info-banner-num">
                                <div class="sib-circle">
                                    <div class="sib-num">
                                        <span class="sib-percentage">-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-info-banner-text d-flex align-items-center">
                                <div>
                                    <h2 class="text-white font-permanent">All Seeds are considered HEMP Seeds by law. Every seed tested contained less than 0.03% THC</h2>
                                    <?php if( is_product_category()): ?>
                                        <?php $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) ); ?>
                                        <a class="btn-main-web14 btn-border-sn" href="<?php echo $shop_page_url ?>">
                                            <?php _e('All products' , 'web14devsn'); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php get_footer();
