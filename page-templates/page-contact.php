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
				<?php
				$contact_information = get_field('contact_information');
				if( $contact_information ): ?>
				    <div class="row g-5">
						<div class="col-md-4">
							<h5><?php _e('Address:' , 'web14devsn'); ?></h5>
							<p><?php echo $contact_information['address_c_page'] ?></p>
						</div>
						<div class="col-md-4">
							<h5><?php _e('Phone:' , 'web14devsn'); ?></h5>
							<p><?php echo $contact_information['phone_c_page'] ?></p>
						</div>
						<div class="col-md-4">
							<h5><?php _e('Email:' , 'web14devsn'); ?></h5>
							<p><a href="mailto:<?php echo $contact_information['email_c_page'] ?>"><?php echo $contact_information['email_c_page'] ?></a></p>
						</div>
					</div>
				<?php endif; ?>
				
			</div>
			<!-- Contact form -->
			<div class="cf-sn-wrapper">
				<?php echo do_shortcode('[wpforms id="218"]'); ?>
			</div>

			<!-- Discord channel -->
			<?php
			$discord_c_page = get_field('discord_c_page');
			if( $discord_c_page ): ?>
				<div class="discord-channel-wrap">
					<div class="discrod-channel-box">
						<div class="dcb-inner d-flex flex-wrap">
							<div class="dcb-icon">
								<img src="<?php echo PATH_SN ?>/uploads/discord.svg" alt="Discord">
							</div>
							<div class="dcb-heading">
								<h2>
									<?php echo $discord_c_page['heading_1_discord']; ?><br>
									<span class="text-green"> <?php echo $discord_c_page['heading_2_discord']; ?></span>
								</h2>
							</div>
							<?php if($discord_c_page['button_label_discord'] && $discord_c_page['button_link_discord'] ): ?>
							<div class="dcb-button">
								<a href="<?php echo esc_url($discord_c_page['button_link_discord']); ?>" class="ml-auto btn-main-web14 btn-border-green-sn">
									<?php echo $discord_c_page['button_label_discord'];  ?>
								</a>
							</div>
							<?php endif; ?>
						</div>
					</div>	
				</div>    
			<?php endif; ?>
			
		</div>
		<?php endwhile; ?>
	</main><!-- #main -->
<?php
get_footer();
