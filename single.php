<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package web14devsn
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container-lg">
        <?php  get_template_part('template-parts/global/page-breadcrumb'); ?>
		
		<!-- Post content -->
		<div class="row ">
			<div class="col-lg-8 m-auto">
				<?php
				while ( have_posts() ) : the_post(); ?>

					<div class="sp-content-wrapper-sn ptb-80">
						<header>
							<div class="sp-date-container">
								<div class="post-meta-row d-flex align-items-center justify-content-center">
				        	        <div class="post-meta-text text-center">
				                       <h6><?php echo get_the_date(); ?></h6>
				                   </div>
				                </div>
				                <h1 class="single-post-title">
				                    <?php the_title(); ?>
				                </h1>
				                <div class="sp-category-sn">
				                	<?php
									$categories_list = get_the_category_list(', '); 

									if ($categories_list) {
									    echo '<span class="category-label-sn">'.__('Category:' , 'web14devsn').'</span> ' . $categories_list;
									}
									?>
				                </div>

				                <div>
				                	<?php if(has_post_thumbnail()): ?>
				                		<?php the_post_thumbnail('large' , ['class' => 'img-fluid mt-3']); ?>
				                	<?php endif; ?>
				                </div>
                
							</div>
						</header>

						<div class="sp-content-sn pt-5">
							<?php the_content(); ?>
						</div>
						<div class="blog-backward pt-5">
							<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn-main-web14 btn-border-green-sn d-inline-flex align-items-center">
								<div class="me-2 d-flex align-items-center btn-chevron">
									<svg xmlns="http://www.w3.org/2000/svg" height="14"  viewBox="0 0 320 512"><path  fill="#4c903f" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
								</div>
								<div>
									<?php _e('Back' , 'web14devsn'); ?>
								</div>
							</a>
						</div>
					</div>

				<?php endwhile; ?>

			</div>
			

		</div>
	</div>
    <?php  get_template_part('template-parts/global/side-arrows'); ?>


</main><!-- #main -->

	<!-- Related posts -->
<section class="section-related-posts pt-100" style="background-image: url(<?php echo PATH_SN ?>/uploads/related-posts-bg.png);background-size: cover;background-position: center;">
	 <!-- Related posts area -->
      <div class="sp-related-area pt-100 pb-100" style="background:rgba(0, 0, 0, 0.1);">
      	<div class="container-lg">
      		<div class="row g-4">
      			<div class="col-6 ">
	      			<h2 class="section-title-sn font-permanent pb-3">
		                  <?php _e('Also check' , 'web14devsn'); ?>
		            </h2>		
      			</div>
      			<div class="col-6 d-flex justify-content-end">
					<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="ml-auto btn-main-web14 btn-border-green-sn">
						<?php _e('All news' , 'web14devsn'); ?>
					</a>
				</div>
      		</div>
      		

            <div class="sp-related-container">
                <?php 
                function getRelatedBlogPosts() {
				    global $post;

				    $current_post_id = $post->ID;

				    $args = array(
				        'post_type'      => 'post',
				        'posts_per_page' => 3,
				        'post__not_in'   => array($current_post_id), 
				        'ignore_sticky_posts' => 1 
			
				    );

				    $query = new WP_Query($args);

				    if ($query->have_posts()) {
				        
				        return $query->posts;
				    }

				    return array();
				}

    
				$related_posts = getRelatedBlogPosts();

				if ($related_posts) : ?>
					<div class="row">
					<?php 
				    foreach ($related_posts as $post) : ?>
				        <?php setup_postdata($post); ?>
				        <div class="article-col-sn col-lg-4 col-md-6 col-sm-6 col-12 mb-4 mb-lg-0">
									<?php get_template_part( 'template-parts/content'); ?>	
								</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); ?>
				  </div>
				<?php endif; ?>

                
                
            </div>
      	</div>
          
      </div>
      <!-- End related -->
</section>



<?php
get_footer();
