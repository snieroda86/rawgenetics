
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
							
							<img class="img-fluid ms-main-bg-mobile d-block d-md-none" src="<?php echo PATH_SN ?>/uploads/slide_mobile_2.png" alt="Main slide">	
						</div>
						<div class="main-slider-row d-flex flex-wrap">
							<div class="col-sm-9 col-lg-7 col-12">
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
								        ?>
								        <!-- Slide -->
										<div>
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

								    <?php endwhile; ?>
								    </div>
								<?php endif; ?>
								</div>
								
							</div>
							<div class="col-sm-3 col-lg-5 col-12">
								<div class="main-slider-right-col" id="scene-sn-1">
									<?php if( get_field('cannabis_leaf') ): ?>
									    <img data-depth="0.3" class="img-fluid selectDisable cannabis-move-img" src="<?php echo esc_url( get_field('cannabis_leaf')) ?>" alt="Cannabis">
									<?php endif; ?>
										
									<!-- Dots -->
									<img data-depth="-0.1" class="img-fluid selectDisable dots-move-img" src="<?php echo PATH_SN ?>/uploads/slider-dots.png" alt="Dots">
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>







