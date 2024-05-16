<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header cat-header-sn">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .page-header -->

	<div class="entry-content pb-3 pb-lg-5">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</div><!-- #post-<?php the_ID(); ?> -->
