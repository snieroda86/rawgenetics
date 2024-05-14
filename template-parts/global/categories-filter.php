<?php
$current_page = get_queried_object();
$current_cat_id =  $current_page->term_id;
$post_categories = get_categories(array(
    'parent' => 0, 
    'taxonomy' => 'category', 
));
if($post_categories): ?>

<div class="post-cat-filter-sn">
	<div class="d-flex flex-wrap">
		<div class="all-cats-btn">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="ml-auto btn-main-web14 no-border-btn <?php echo( !is_category() ) ? ' btn-border-green-sn ' : ''; ?>">
				<?php _e('All' , 'web14devsn'); ?>
			</a>

			<?php foreach( $post_categories as $category): 
				$category_link = get_category_link($category->term_id);
			?>
    			<a class="btn-main-web14 no-border-btn <?php echo( $category->term_id == $current_cat_id  ) ? ' btn-border-green-sn ' : ''; ?>" href="<?php echo esc_url($category_link) ?>"><?php echo $category->name; ?></a>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php endif; ?>