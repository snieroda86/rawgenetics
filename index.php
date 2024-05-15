<?php
/**
 * The template for displaying post index pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

get_header();
?>

	<main id="primary" class="site-main section-bg-grey">
		<?php  get_template_part('template-parts/global/side-arrows'); ?>
		<div class="container-lg">
			<?php  get_template_part('template-parts/global/page-breadcrumb'); ?>
			<header class="page-header cat-header-sn">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header><!-- .page-header -->

			<!-- Categories filter -->
        	<?php  get_template_part('template-parts/global/categories-filter'); ?>

        	<!-- Post slider  -->
			<?php  get_template_part('template-parts/global/post-slider'); ?>

        	<div class="d-flex flex-wrap">
        		<div class="post-grid-row-sn ">
        			<?php if ( have_posts() ) : ?>
        				<div class="row g-5">
        					<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post(); ?>
								<div class="article-col-sn col-lg-6 col-md-12 ">
									<?php get_template_part( 'template-parts/content'); ?>	
								</div>
								
							<?php endwhile; ?>
        				</div>
		        		<?php get_template_part('template-parts/post-pagination'); ?>
					<?php
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
        		</div>

        		<div class="blog-sidebar-sn">
        			<aside>
        				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
							
							<?php dynamic_sidebar('sidebar-1'); ?>
							
						<?php } ?>
        			</aside>
        		</div>
				

			</div>
				
		</div>

		
	</main><!-- #main -->

<?php  get_template_part('template-parts/global/scripts-js'); ?>

<?php

get_footer();
