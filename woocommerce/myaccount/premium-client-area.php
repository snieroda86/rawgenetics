<?php 
if(is_user_logged_in()): ?>
	<?php $current_user = wp_get_current_user(); ?>
	<div class="premium-client-area">
		<div>
			Witaj <?php echo $current_user->user_login; ?>
		</div>
	</div>

	<?php 
	$args = array(
	    'customer_id' => $current_user->ID,
	    'limit' => -1, 
	);
	$orders = wc_get_orders($args);

	$total_amount = 0;

	foreach ($orders as $order) {
	    $total_amount += $order->get_total();
	}

	?>

	<h5>Kwota z wszystkich Twoich zamówień wynosi <?php echo wc_price($total_amount); ?> </h5>


	<div class="premium-product-container">
		<?php if($total_amount > 50 ): ?>
			<h4>Mamy dla Ciebie rabat na następujące produkty:</h4>
		<?php else: ?>
			<h4>Aby otrzymac rabat musisz posiadać większą sume zamówień</h4>
		<?php endif; ?>	
	</div>
	

<?php endif; ?>