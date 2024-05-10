<section  class="section-featured-products woocommerce pt-100">
	
	<div class="container-lg">
		
		<div class="onsale-products-sn-wrapper d-flex flex-wrap">

			<div class="onsale-products-ftr-box">
				<div class="onsale-ftr-inner" style="background-image: url(<?php echo PATH_SN ?>/uploads/sale-ftr-box-cr.png);background-repeat: no-repeat;background-size: cover;">
					<div class="box-text-vertical">
						<div class="text-v-item">
							<h3 class="vertical-head-1">new products drop</h3>
						</div>
						<div class="text-v-item">
							<h3 class="vertical-head-2">new products drop</h3>
						</div>
					</div>
					<div class="box-text-desc">
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua</p>
					</div>

				</div>
			</div>

			<div class="onsale-carousel-container">
				<?php
				function getPromotionalProductsSN($per_page = 8, $order = 'DESC'){

				    $args = array(
			            'posts_per_page' => $per_page, 
			            'order' => $order ,
				        'post_type' => array('product', 'product_variation'),
				        'meta_key' => '_sale_price',
				        'meta_value' => 0,
				        'meta_compare' => '>=' ,
				        'meta_type' => 'NUMERIC',
				        'post__not_in'   => wc_get_featured_product_ids(),
			        );
			        return $onSaleProducts = new WP_Query( $args );

				}

				?>

				<?php $getPromotionalProductsSN = getPromotionalProductsSN(); ?>
			    <?php if ($getPromotionalProductsSN->have_posts()) : // (3) ?>
			        <div class="onsale-products-sn">
			        <?php while ($getPromotionalProductsSN->have_posts()) : $getPromotionalProductsSN->the_post();  ?>
			        	<div>
			        		<?php  wc_get_template_part( 'content', 'product' );  ?>
			        	</div>
			                            
			        <?php endwhile; ?>
			        </div>

			        <!-- Custom arrows -->
			            <div class="rec-prev">
			                <img src="<?php echo PATH_SN ?>/uploads/angle-left-dark.svg"  alt="Arrow">
			            </div>
			            <div class="rec-next">
			                <img src="<?php echo PATH_SN ?>/uploads/angle-right-dark.svg"  alt="Arrow">
			            </div>
			        <?php wp_reset_postdata();  ?>
			    <?php else:  ?>
			    <p><?php _e( 'No products found' , 'web14devsn' );  ?></p>
			    <?php endif; ?>
			</div>
			

		</div>
	</div>
	
</section>