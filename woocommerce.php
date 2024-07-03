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
    <?php  get_template_part('template-parts/global/side-arrows'); ?>

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

                        // Category image
                        $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id );
                        if ( $image ) {
                            echo '<div class="cat-image-wrap-sn pb-5">';
                            echo '<img src="' . $image . '" alt="' . $cat->name . '" class="img-fluid" />';
                            echo '</div>';
                        }


                    }
                    ?>


                <?php endif; ?>
                <!-- Shop banner -->
                <?php if( is_shop()): ?>
                    <?php
                    $info_promotions = get_field('info_promotions' , 'option');
                    if( $info_promotions ): ?>
                        <div class="shop-info-banner" style="background-image: url(<?php echo esc_url($info_promotions['background_image_prc']) ?>);background-size: cover;background-position: center;">
                            <div class="shop-info-banner-inner">
                                <div class="d-flex">
                                    <div class="shop-info-banner-num">
                                        <div class="sib-circle">
                                            <div class="sib-num">
                                                <div class="sib-percentage d-flex">
                                                    <span>-</span>
                                                    <span><?php echo $info_promotions['percentage_discount_value'] ?></span>
                                                    <span>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-info-banner-text d-flex align-items-center">
                                        <div>
                                            <h2 class="text-white font-permanent"><?php echo $info_promotions['discount_information'] ?></h2>
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
                    <?php endif; ?>
                    
                <?php endif; ?>

                <?php woocommerce_content(); ?>
            </div>
        </div>
    </div>

    <?php if( is_product() ): ?>
        <?php  get_template_part('template-parts/home/blog-posts'); ?>
    <?php endif; ?>
</main><!-- #main -->

<?php get_footer();
