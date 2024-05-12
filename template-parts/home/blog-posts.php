<section  class="section-post-grid pt-100">
	<div class="container-lg p-relative">
			<div class="row pb-4">
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
			</div>

			<div class="blog-posts-container p-relative">
                <?php  
                function getFeaturedBlogPosts() {

				   $args = array(
					    'post_type'      => 'post',
					    'posts_per_page' => 3,
					    'meta_query'     => array(
					        'relation' => 'OR',
					        array(
					            'key'     => 'featured_posts',
					            'value'   => true,
					            'compare' => '=',
					        ),
					        array(
					            'key'     => 'featured_posts',
					            'compare' => 'NOT EXISTS',
					        ),
					    ),
					    'orderby'        => array(
					        'meta_value' => 'DESC', 
					        'date'       => 'DESC', 
					    ),
					);
				    $query = new WP_Query($args);

				    if ($query->have_posts()) {
				        
				        return $query->posts;
				    }

				    return array();
				}

    
				$featured_posts = getFeaturedBlogPosts();

				if ($featured_posts) : ?>
					<div class="row post-grid-row-sn g-5">
					<?php 
				    foreach ($featured_posts as $post) : ?>
				        <?php setup_postdata($post); ?>
				        <div class="article-col-sn col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
							<?php get_template_part( 'template-parts/content'); ?>	
						</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); ?>
				  </div>
				<?php endif; ?>
            </div>

            <!-- Cloud image -->
            <div class="cloud-post-grid-bg">
            	<img class="img-fluid" src="<?php echo PATH_SN  ?>/uploads/cloud_blog.png" alt="Cloud">
            </div>
         	
	</div>
</section>