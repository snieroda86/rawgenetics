<?php
$new_tab = get_field('open_in_new_tab_ticker' , 'option');
if( have_rows('newsticker','option') ): ?>
<div class="ticker-top-wrapper">
	<div class="container-lg">
		<div class="row">
			<div class="col-12">
				<div class="newsticker js-newsticker">
					 <ul class="js-frame">
					 	<?php
					    while( have_rows('newsticker','option') ) : the_row();
					        $promotion_information = get_sub_field('promotion_information');
					        $source_link_ticker = get_sub_field('source_link_ticker');
					        ?>
					        <?php if($promotion_information && $source_link_ticker ): ?>
					        <li class="js-item">
					        	<a href="<?php echo esc_url($source_link_ticker); ?>"  <?php echo( $new_tab ) ? ' target="_blank"' : '' ?>>
					        		<?php esc_html_e($promotion_information); ?>
					        	</a>
					        </li>
					    	<?php endif; ?>
					    <?php endwhile; ?>
				        
				    </ul>
	
    			</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

				
