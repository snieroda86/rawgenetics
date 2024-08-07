
<section  class="section-sn">
	<div class="section-wrapper-sn py-sm-3 py-0 pb-3">
		<div class="container-lg">
			<div class="row">
				<div class="col-12">
					<div class="main-slider-sn-wrapper">
						<div class="main-slider-bg">
							<?php 
							$main_slider_bg = get_field('main_slider_bg');
							$size = 'full'; // (thumbnail, medium, large, full or custom size)
							if( $main_slider_bg ) {
							    echo wp_get_attachment_image( $main_slider_bg, $size , "" , ["class"=>"img-fluid ms-main-bg-desktop d-none d-md-block"] );
							} ?>
							
							<img class="img-fluid ms-main-bg-mobile d-block d-md-none" src="<?php echo PATH_SN ?>/uploads/slider-mobile.webp" alt="Main slide">	
							<!-- Dots -->	
							<div id="scene-sn-1">						
								<img data-depth="1"  class="img-fluid selectDisable dots-move-img" src="<?php echo PATH_SN ?>/uploads/slider-dots.png" alt="Dots">
							</div>
						</div>
						<div class="main-slider-row d-flex flex-wrap">
							<div class="col-12">
								<div class="main-slider-container">

								<?php

								if( have_rows('main_slider_sn') ): ?>
									<div class="main-slider-sn">
									<?php
								    while( have_rows('main_slider_sn') ) : the_row();

								        $heading_ms_top = get_sub_field('heading_ms_top');
								        $heading_ms_bottom = get_sub_field('heading_ms_bottom');
								        $description_ms = get_sub_field('description_ms');
								        $button_1_label_ms = get_sub_field('button_1_label_ms');
								        $button_2_label_ms = get_sub_field('button_2_label_ms');
								        $button_1_link_ms = get_sub_field('button_1_link_ms');
								        $button_2_link_ms = get_sub_field('button_2_link_ms');
								        $product_image_ms = get_sub_field('product_image_ms');

								        ?>
								        <!-- Slide -->
										<div class="d-flex flex-wrap">
											<div class="col-md-8 col-12">
												<div class="m-slider-text-area">
													<h1><?php echo esc_html($heading_ms_top); ?><br><span class="text-stroke"><?php echo esc_html($heading_ms_bottom); ?></span></h1>
													<div class="py-3">
														<p><?php echo esc_html($description_ms); ?></p>
													</div>	
												</div>
												
												<div class="buttons-row d-flex pt-3 pt-sm-0">
													<?php if( $button_1_label_ms && $button_1_link_ms): ?>
													<div class="col-sn me-4">
														<a href="<?php echo esc_url($button_1_link_ms); ?>" class="btn-main-web14"><?php echo $button_1_label_ms ?></a>
													
													</div>
													<?php endif; ?>
													<?php if( $button_2_label_ms && $button_2_link_ms): ?>
													<div class="col-sn">
														<a href="<?php echo esc_url($button_2_link_ms); ?>" class="btn-main-web14 btn-white-bg"><?php echo $button_2_label_ms ?></a>
													</div>
													<?php endif; ?>
												</div>
											</div>

											<div class="col-md-4 col-12">
												<div class="main-slider-right-col" >
													<?php if( $product_image_ms ): ?>
													    <img  class="img-fluid selectDisable cannabis-move-img" src="<?php echo esc_url( $product_image_ms['url'] ) ?>" alt="<?php echo $product_image_ms['alt'] ?>">
													<?php endif; ?>
														
												</div>
											</div>
											
										</div>

								    <?php endwhile; ?>
								    </div>
								<?php endif; ?>
								</div>
								
							</div>
							

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>







