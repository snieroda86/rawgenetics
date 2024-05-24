<?php
/**
 * The template for displaying frontpage
 * Template Name: Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

get_header();
?>

<main id="primary" class="site-main">
    
        <?php  get_template_part('template-parts/home/main-slider'); ?>
        <?php  get_template_part('template-parts/home/recommended-products-slider'); ?>
        <?php  get_template_part('template-parts/home/product-info'); ?>
        <?php  get_template_part('template-parts/home/about'); ?>
        <?php  get_template_part('template-parts/home/recent-products'); ?>
        <?php  get_template_part('template-parts/home/blog-posts'); ?>
        <?php  get_template_part('template-parts/global/side-arrows'); ?>
        
</main><!-- #main -->


<script type="text/javascript">
  
     jQuery(document).ready(function($){

        // Cannabis parallax
        var scene1 = document.getElementById('scene-sn-1');
        var parallaxInstance1 = new Parallax(scene1);

        // Cloud parallax
        var scene2 = document.getElementById('scene-sn-2');
        var parallaxInstance2 = new Parallax(scene2);

        // Post grid cloud parallax
        var scene3 = document.getElementById('scene-sn-3');
        var parallaxInstance3 = new Parallax(scene3);


    //     // main-slider-sn
        $('.main-slider-sn').slick({
          dots: true,
          arrows: false,
          autoplay: true,
          pauseOnHover : false ,
          infinite: true,
          speed: 200,
          fade: true,
          cssEase: 'linear',
          appendDots: $('.main-slider-sn-wrapper') ,
          responsive: [
           
            {
              breakpoint: 650,
              settings: {
                dots: false,
                arrows:false
              }
            }
            
          ]
        });

        $('.main-slider-sn').fadeIn();

         // Onsale products slider

        $('.onsale-products-sn').slick({
          dots: false,
          arrows: true ,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
           prevArrow: $('.rec-prev'),
          nextArrow: $('.rec-next'),
          responsive: [
            {
              breakpoint: 1199,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true
              }
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows: true
              }
            },
            {
              breakpoint: 820,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 650,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows:false
              }
            },
            {
              breakpoint: 460,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            
          ]
        });

        $('.onslae-carousel-tmp').fadeIn();

    });
</script>
<?php
get_footer();
