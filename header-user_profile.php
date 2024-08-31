<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web14devsn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site up-site">

	<header id="user-profile-header" class="user-profile-site-header">

		<nav class="navbar navbar-expand-lg bg-transparent">
		  <div class="container-fluid">
		  	<div class="d-flex w-100">
		  		<div class="up-logo-col">
			  		LOGO
			  	</div>
			  	<div class="up-navbar-col">
			  		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNav">
						<?php
			            wp_nav_menu(array(
			                'theme_location' => 'user-profile-menu',
			                'container' => false,
			                'menu_class' => '',
			                'fallback_cb' => '__return_false',
			                'items_wrap' => '<ul id="%1$s" class="navbar-nav m-auto %2$s">%3$s</ul>',
			                'depth' => 2,
			                'walker' => new bootstrap_5_wp_nav_menu_walker()
			            ));
			            ?>
				    </div>
			  	</div>

		  		<div class="up-contact-col">
		  			<a href="#" class="up-header-contact-link">
		  				Contact
		  			</a>
		  		</div>	
		  	</div>
		  	
		  </div>
		</nav>
	</header><!-- #masthead -->


