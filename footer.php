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
						
	<?php  get_template_part('template-parts/newsletter'); ?>
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
			<div class="row copyr-row-sn mt-5 gy-3">

				<div class="col-sm-6">
					
					<p class="p-0 m-0 pb-3 footer-text text-center text-sm-start">
						<span>© </span><span><?php echo date('Y') ?></span> <span> Raw Genetics. All rights reserved. </span> 
					</p>
					
				</div>

				<div class="col-sm-6">
					<p class="text-sm-end text-center p-0 m-0 pb-3">Created and managed by <span class="text-green"><a target="_blank" href="https://crewint.org"><b>Crew International.</b></a></span></p>
				</div>
				
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
    $(window).scroll(function() {
        var header = document.getElementById('masthead');
        var scrollPosition = window.scrollY;
        var logo = document.querySelector('.custom-logo');

        if (scrollPosition > 0) {
            header.classList.add('header-scrolled');
            logo.style.width = 70 + 'px';
        } else {
            header.classList.remove('header-scrolled');
            logo.style.width = 100 + '%';

        }
    });
});

	
</script>

</body>
</html>
