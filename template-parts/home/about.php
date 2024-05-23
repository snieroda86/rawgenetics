<section  class="section-about">
	<div class="container-lg">
		<div class="row g-5">
			<div class="col-md-6 pe-md-5">
				<div class="sec-about-desc">
					<h2 class="section-title-sn">
						<?php the_field('heading_ac'); ?>
					</h2>
					<h3 class="section-subtitle-sn text-uppercase">
						<?php the_field('subheading_ac'); ?>
					</h3>
					<p class="font-18">
						<?php the_field('description_ac'); ?>
					</p>
					<?php if( get_field('button_label_ac') && get_field('button_link_ac')): ?>
					<a href="<?php echo esc_url(get_field('button_link_ac')); ?>" class="btn-main-web14">
						<?php the_field('button_label_ac'); ?>
					</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-6 sec-about-icons p-relative">
				<div id="scene-sn-2">
					<img class="moving-cloud img-fluid" id="moving-cloud" data-depth="0.1" src="<?php echo PATH_SN ?>/uploads/cloud-about.png" alt="Cloud">	
				</div>

				<?php

				if( have_rows('icons_ac') ): ?>
					<div class="about-icons-container ps-md-5">
					<?php
				    while( have_rows('icons_ac') ) : the_row();

				        $icon_ac= get_sub_field('icon_ac');
				        $icon_label_ac= get_sub_field('icon_label_ac');

				        ?>

				        <!-- Item -->
						<div class="icon-row-item d-flex">
							<!-- Icon -->
							<div class="icon-item-icon">
								<div class="icon-item-circle">
									<?php 
									
									$size = 'full'; // (thumbnail, medium, large, full or custom size)
									if( $icon_ac ) {
									    echo wp_get_attachment_image( $icon_ac, $size );
									} ?>
								</div>
							</div>
							<!-- Label -->
							<div class="icon-item-label">
								<h3><?php echo $icon_label_ac ?></h3>
							</div>
						</div>
				    <?php endwhile; ?>
				    </div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>