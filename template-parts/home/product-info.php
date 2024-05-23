<section  class="section-product-info pt-100">
	<div class="container-lg">
		<?php

		if( have_rows('information_boxes') ): ?>
			<div class="row g-md-5 g-4">
			<?php
		    while( have_rows('information_boxes') ) : the_row();

		        $box_background_pb = get_sub_field('box_background_pb');
		        $percentage_discount = get_sub_field('percentage_discount');
		        $heading_pd = get_sub_field('heading_pd');
		        $button_label_pb = get_sub_field('button_label_pb');
		        $button_link_pb = get_sub_field('button_link_pb');
		        $show_birds_icon = get_sub_field('show_birds_icon');

		        ?>
		        <!-- Ietm -->
				<div class="col-md-6">
					<div class="product-info-box" style="background-image: url(<?php echo esc_url( $box_background_pb ) ?>);background-size: cover;background-position: center left;">
						<div>
							<p class="text-white font-18 ">
								<?php echo $percentage_discount ?></p>
							<h2 class="text-white"><?php echo $heading_pd ?></h2>
							<?php if($button_label_pb && $button_link_pb ): ?>
							<a href="<?php echo esc_url($button_link_pb) ?>" class="btn-main-web14 btn-border-sn">
								<?php echo $button_label_pb ?>
							</a>
							<?php endif; ?>
						</div>
						<?php if($show_birds_icon): ?>
						<!-- Birds icon -->
						<div class="birds-icon">
							<img src="<?php echo PATH_SN ?>/uploads/birds-icon.svg" alt="Birds">
						</div>
						<?php endif; ?>
					</div>
				</div>
		    <?php endwhile; ?>
		    </div>
		<?php endif; ?>
						
	</div>
</section>