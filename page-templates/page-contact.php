<?php
/**
 * Template Name: Contact page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

get_header();
?>

	<main id="primary" class="site-main page-about">
		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="container-lg">
			<?php  get_template_part('template-parts/global/page-breadcrumb'); ?>
			<header class="page-header cat-header-sn">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content-sn pb-5">
				<?php the_content(); ?>
			</div>
			<div class="contact-data-row">
				<div class="row g-5">
					<div class="col-md-4">
						<h5>Address:</h5>
						<p>13089 Payton Drive Unit C-192, Chino Hills, CA 91709</p>
					</div>
					<div class="col-md-4">
						<h5>Phone:</h5>
						<p>(951) 496-6564 (Please Send Text First)</p>
					</div>
					<div class="col-md-4">
						<h5>Email:</h5>
						<p><a href="mailto:support@rawgenetics.io">support@rawgenetics.io</a></p>
					</div>
				</div>
			</div>
			<!-- Contact form -->
			<div class="cf-sn-wrapper">
				<?php echo do_shortcode('[wpforms id="218"]'); ?>
			</div>

			<!-- Discord channel -->
			<div class="discord-channel-wrap">
				<div class="discrod-channel-box">
					<div class="dcb-inner d-flex flex-wrap">
						<div class="dcb-icon">
							<img src="<?php echo PATH_SN ?>/uploads/discord.svg" alt="Discord">
						</div>
						<div class="dcb-heading">
							<h2>
								Please Use Our Discord<br>
								<span class="text-green"> Customer Service Channel</span>
							</h2>
						</div>
						<div class="dcb-button">
							<a href="#" class="ml-auto btn-main-web14 btn-border-green-sn">
								Customer Service
							</a>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<?php endwhile; ?>
	</main><!-- #main -->
<?php
get_footer();
