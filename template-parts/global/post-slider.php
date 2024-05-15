<?php
	$args = array(
	    'post_type'      => 'post',
	    'posts_per_page' => 5,
	    'meta_query'     => array(
	        array(
	            'key'     => '_is_featured',
	            'value'   => '1',
	            'compare' => '=',
	        ),
	    ),
	    'orderby'        => array(
	        'meta_value' => 'DESC',
	        'date'       => 'DESC',
	    ),
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
						<div class="col-md-6">
							<div class="single-post-content s-slider-post-content">
				                <div class="post-meta-row d-flex align-items-center">
				            				            
				                   <div class="post-meta-text">
				                       <h6><?php echo get_the_date(); ?></h6>
				                   </div>
				                </div>

				                <a href="<?php the_permalink(); ?>">
				                   <h2 class="single-post-title">
				                       <?php the_title(); ?>
				                   </h2>
				                </a>

				                <div class="post-excerpt-sn">
				                	<p>
				                    <?php
									echo wp_trim_words( get_the_content(), 40, '...' );
									?>
									</p>
				                </div>

				                <div class="post-more-link">
				                	<a href="<?php the_permalink(); ?>" class="btn-main-web14">
				                		<?php _e('Read more' , 'web14devsn'); ?>
				                	</a>
				                </div>
				            </div>
						</div>
					</div>
				</div>
				
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>

