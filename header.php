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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		
		<!-- navbar -->
		<nav class="navbar navbar-expand-xl navbar-light">
		    <div class="container-lg">
		    	<div class="d-flex w-100 justify-content-between">
    				<!-- Logo -->
				  	<div id="web14-logo">
				  		<?php 
		                if ( function_exists( 'the_custom_logo' ) ) {
							    the_custom_logo();
							}
				  		?>
				  	</div>
	    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        
			        <div class="collapse navbar-collapse" id="main-menu">
			            <?php
			            wp_nav_menu(array(
			                'theme_location' => 'menu-primary',
			                'container' => false,
			                'menu_class' => '',
			                'fallback_cb' => '__return_false',
			                'items_wrap' => '<ul id="%1$s" class="navbar-nav mb-2 mb-md-0 %2$s">%3$s</ul>',
			                'depth' => 2,
			                'walker' => new bootstrap_5_wp_nav_menu_walker()
			            ));
			            ?>

			        </div>

			        <?php if ( class_exists( 'woocommerce' ) ): ?>
			        	<div class="search-box-h-wrapper d-flex ">
			        		<!-- Search box -->
			        		<div class="web14-search-box">
			        			<?php echo do_shortcode('[fibosearch]'); ?>
			        		</div>
			        		<!-- My account icon -->
			        		<?php 
			        		$account_url = get_permalink( get_option('woocommerce_myaccount_page_id') );	?>
			        		<?php if($account_url): ?>
			        		<div class="web14-myaccount-link">
			        		
			        			<div class="dropdown my-account-menu-dropdown">
								  <a href="#" class=" dropdown-toggle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
								    <img src="<?php echo PATH_SN ?>/uploads/myaccount.png" alt="My account">
			        				<span><?php _e('My account' , 'web14devsn'); ?></span>
								  </a>
								  <ul class="dropdown-menu">
								  	<?php if(is_user_logged_in()): ?>
								    <li><a class="dropdown-item" href="<?php echo esc_url($account_url) ?>"><?php _e('Dashboard' , 'web14devsn'); ?></a></li>
								    
									<?php else: ?>
										<li><a class="dropdown-item" href="<?php echo esc_url($account_url) ?>"><?php _e('Log in' , 'web14devsn'); ?></a></li>
									    <li><a class="dropdown-item" href="<?php echo esc_url($account_url) ?>"><?php _e('Register' , 'web14devsn'); ?></a></li>
									    
									<?php endif; ?>
								  </ul>
								</div>

			        		</div>
			        		<?php endif; ?>
			        		<?php
			        		$cart_url = wc_get_cart_url();	?>
			        		<?php if($cart_url): ?>
			        		<!-- Shopping cart -->
			        		<div class="web14-shopping-cart">
			        			<a href="<?php echo esc_url($cart_url) ?>" class="d-flex">
			        				<img src="<?php echo PATH_SN ?>/uploads/shopping-cart.png" alt="Cart">
			        			</a>
			        			<div class="web14-cart-count">
			        				<span>(<?php echo WC()->cart->get_cart_contents_count() ?>)</span>
			        			</div>
			        		</div>
			        		<?php endif; ?>
			        	</div>

			        <?php else: ?>
			        	<small><?php _e('Woocommerce plugin in not activated' , 'web14devsn'); ?></small>
			    	<?php endif; ?>
		    	
		    	</div>
		       
		    </div>
		</nav>
		<!-- End nev navbar -->

	</header><!-- #masthead -->


