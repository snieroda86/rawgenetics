<?php
	$args = array(
	    'post_type' => 'post', 
	    'posts_per_page' => 5, 
	    'meta_query' => array(
	        'relation' => 'OR',
	        array(
	            'key' => '_is_featured', 
	            'value' => '1',
	            'compare' => '='
	        ),
	        array(
	            'key' => '_is_featured',
	            'compare' => 'NOT EXISTS'
	        )
	    ),
	    'orderby' => array(
	        'meta_value' => 'DESC', 
	        'date' => 'DESC'
	    )
	);

	$query = new WP_Query($args); ?>


<?php if($query->have_posts()): ?>
	<div class="post-slider-wrapper-sn">
		<div class="post-slider-sn">
			<?php while ($query->have_posts()) : ?>
				<?php $query->the_post(); ?>
				<div>
					<div class="row g-5">
						<div class="col-md-6">
							<a href="<?php the_permalink(); ?>">
								<?php if( has_post_thumbnail()): ?>
									<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
								<?php else: ?>
									<img src="<?php echo PATH_SN ?>/uploads/no-image.jpg" class="img-fluid">
								<?php endif; ?>

							</a>
						</div>
					</div>
				</div>
				
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>

