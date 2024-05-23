<section  class="section-post-grid pt-100 <?php if( is_product() ): ?> pb-100  <?php endif; ?>" <?php if( is_product() ): ?>  style="background-image: url(<?php echo PATH_SN ?>/uploads/related-posts-bg.png);background-size: cover;background-color: rgba(0, 0, 0, 0.1);" <?php endif; ?>>
	<div class="container-lg p-relative">
			<div class="row pb-4">
				<?php if( is_product() ): ?>

					<div class="col-12">
						<h2 class="section-title-sn font-permanent text-center">
							<?php _e('Also check' , 'web14devsn'); ?>
						</h2>
					</div>
				<?php else: ?>
					<div class="col-6">
						<h2 class="section-title-sn font-permanent">
							Recent posts
						</h2>
					</div>
					<div class="col-6 d-flex justify-content-end">
						<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="ml-auto btn-main-web14 btn-border-green-sn">
							<?php _e('All news' , 'web14devsn'); ?>
						</a>
					</div>
				<?php endif; ?>
				
			</div>

			<div class="blog-posts-container p-relative">
                <?php  
				function getLatestBlogPosts() {
				    $args = array(
				        'post_type'      => 'post',
				        'posts_per_page' => 3,
				        'ignore_sticky_posts' => 1 
				    );
				    $query = new WP_Query($args);

				    if ($query->have_posts()) {
				        return $query->posts;
				    }

				    return array();
				}


				$recent_posts = getLatestBlogPosts();

				if ($recent_posts) : ?>
					<div class="row g-5">
					<?php 
				    foreach ($recent_posts as $post) : ?>
				        <?php setup_postdata($post); ?>
				        <div class="article-col-sn col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
							<?php get_template_part( 'template-parts/content'); ?>	
						</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); ?>
				  </div>
				<?php else: ?>
					<p><?php _e('No post found' , 'web14devsn'); ?></p>
				<?php endif; ?>
            </div>

            <!-- Cloud image -->
            <div class="cloud-post-grid-bg" id="scene-sn-3">
            	<img class="img-fluid" data-depth="0.1" src="<?php echo PATH_SN  ?>/uploads/cloud_blog.png" alt="Cloud">
            </div>
         	
	</div>
</section>