<?php 
$section_bg_prod_s = PATH_SN.'/uploads/recent-products-bg.png';
if(get_field('section_bg_prod_s')){
	$section_bg_prod_s = get_field('section_bg_prod_s');
}
?>
<section  class="section-recent-products" style="background-image: url(<?php echo $section_bg_prod_s ?>);background-size: cover; background-position: center top;">
	<div class="container-lg">
		<header class="section-header">
			<h2 class="section-title-sn text-center pb-5 text-white">
				<?php the_field('heading_prod_s'); ?>
			</h2>	
		</header>
		
		<div class="row">
			<div class="col-12">
				<?php
				$num_prod_s = 8;
				if(get_field('num_prod_s')){
					$num_prod_s = get_field('num_prod_s');	
				} 
				 
				?>
				<?php echo do_shortcode('[products limit="'.$num_prod_s.'" columns="4" orderby="date" order="DESC" visibility="visible"]'); ?>

			</div>
		</div>
		<div class="py-3 text-center">
			<?php if ( class_exists( 'woocommerce' ) ): ?>
	        	<?php $shop_page_url = get_permalink( wc_get_page_id( 'shop' ) ); ?>
				<a class="btn-main-web14 btn-border-sn" href="<?php echo $shop_page_url ?>">
					<?php _e('All products' , 'web14devsn'); ?>
				</a>
	        <?php else: ?>
	        	<small><?php _e('Woocommerce plugin in not activated' , 'web14devsn'); ?></small>
	    	<?php endif; ?>
		</div>
	</div>

	<!-- Arrows -->
	<img class="arrows-down-green" src="<?php echo PATH_SN ?>/uploads/arrows-down-green.svg" alt="Arrows">
</section>