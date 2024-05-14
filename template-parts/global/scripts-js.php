<script type="text/javascript">
  
     jQuery(document).ready(function($){

     	<?php if( is_front_page() || is_home() ):  ?>

        // post-slider-sn
        $('.post-slider-sn').slick({
          dots: true,
          arrows: false,
          autoplay: true,
          pauseOnHover : false ,
          infinite: true,
          speed: 200,
          fade: true,
          cssEase: 'linear',
         
        });

    	<?php endif; ?>
        
    });
</script>