<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web14devsn
 */

?>		
						
	
	<footer id="colophon" class="site-footer">
		
		<div class="container-lg footer-container-sn">

			
			<!-- Widget area -->
			<div class="row widget-area-footer-sn gy-4">
				<!-- Widget -->
				<div class="col-lg-6 col-md-4 col-sm-6 col-12 contact-info-widget">
					<div class="widget-item-footer mb-3">
						<?php if ( is_active_sidebar( 'f-widget-1' ) ) { ?>
						    <aside>
						        <?php dynamic_sidebar('f-widget-1'); ?>
						    </aside>
						<?php } ?>
					</div>

					<!-- social media -->
					<?php

					if( have_rows('social_media_sn' , 'option') ): ?>
						<div class="widget-item-footer mb-3 social-media-w-area">
							<?php
						    while( have_rows('social_media_sn' , 'option') ) : the_row();
						        $sm_svg_icon = get_sub_field('sm_svg_icon');
						        $sm_channel_url = get_sub_field('sm_channel_url');
						        ?>
						        <a href="<?php echo esc_url($sm_channel_url); ?>" <?php echo( get_field('sm_target_blank','option')) ? ' target="_blank" ' :''; ?>>
						        	<?php echo $sm_svg_icon; ?>
						        </a>

						    <?php endwhile; ?>
						</div>
					<?php endif; ?>
					
				</div>
				<!-- Widget end -->
				<!-- Widget -->
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="widget-item-footer mb-3">
						<?php if ( is_active_sidebar( 'f-widget-2' ) ) { ?>
						    <aside>
						        <?php dynamic_sidebar('f-widget-2'); ?>
						    </aside>
						<?php } ?>
					</div>
				</div>
				<!-- Widget end -->
				<!-- Widget -->
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="widget-item-footer mb-3">
						<?php if ( is_active_sidebar( 'f-widget-3' ) ) { ?>
						    <aside>
						        <?php dynamic_sidebar('f-widget-3'); ?>
						    </aside>
						<?php } ?>
					</div>
				</div>
				<!-- Widget end -->
				<!-- Widget -->
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="widget-item-footer mb-3">
						<?php if ( is_active_sidebar( 'f-widget-4' ) ) { ?>
						    <aside>
						        <?php dynamic_sidebar('f-widget-4'); ?>
						    </aside>
						<?php } ?>
					</div>
				</div>
				<!-- Widget end -->
			</div>
			<!-- Copyrights -->
			<div class="row copyr-row-sn pt-5">

				<div class="col-12">
					
					<p class="py-3 footer-text">
						<span><?php echo date('Y') ?></span> © <span> Rosfix</span> | 
					</p>
					
				</div>
				
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
