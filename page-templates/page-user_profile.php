<?php
/**
 * Template Name: User profile
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web14devsn
 */

get_header('user_profile');
?>

	<main id="primary" class="up-site-main">
		<!-- Hero -->
		<section class="up-sn-hero" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/up-hero-bg.jpg);background-position: top center;background-attachment: fixed;background-size: cover;background-repeat: no-repeat;">

			<div class="container">
				<div class="col-12">
					<div class="up-user-data-wrapper">
						<div class="up-user-data">
							<h1>USER NAME</h1>
							<div class="user-data-icons d-flex flex-wrap">
								<!-- Item -->
								<div class="user-data-icon-col">
									<div class="user-data-item d-flex">
										<div class="user-data-item-i">
											<img src="<?php echo PATH_SN ?>/uploads/user-profile/gold.png" alt="Gold">
										</div>
										<div class="user-data-item-text">
											<h4>GOLD</h4>

											<div class="user-rating">
												<div class="user-star-rating d-flex">
													<span class="fa fa-star star-checked"></span>
													<span class="fa fa-star star-checked"></span>
													<span class="fa fa-star star-checked"></span>
													<span class="fa fa-star"></span>
													<span class="fa fa-star"></span>
												</div>
											</div>
										</div>		

									</div>
								</div>

								<!-- Item -->
								<div class="user-data-icon-col">
									<div class="user-data-item d-flex">
										<div class="user-data-item-i">
											<img src="<?php echo PATH_SN ?>/uploads/user-profile/ranking.png" alt="rank">
										</div>
										<div class="user-data-item-text">
											<h4>RANKING</h4>

											<div class="user-rating">
												<h5 class="user-points">
													+345
												</h5>
											</div>
										</div>		

									</div>
								</div>

								<!-- Item -->
								<div class="user-data-icon-col">
									<div class="user-data-item d-flex">
										<div class="user-data-item-i">
											<img src="<?php echo PATH_SN ?>/uploads/user-profile/points.png" alt="Points">
										</div>
										<div class="user-data-item-text">
											<h4>POINTS</h4>

											<div class="user-rating">
												<h5 class="user-points">
													+345
												</h5>
											</div>
										</div>	

									</div>
								</div>

								<!-- Item -->
								<div class="user-data-icon-col">
									<div class="user-data-item d-flex">
										<div class="user-data-item-i">
											<img src="<?php echo PATH_SN ?>/uploads/user-profile/orders.png" alt="Orders">
										</div>
										<div class="user-data-item-text">
											<h4>ORDERS</h4>

											<div class="user-rating">
												<h5 class="user-points">
													+345
												</h5>
											</div>
										</div>	

									</div>
								</div>
							</div>
							<!-- Buttons -->
							<div class="d-flex btn-up-action-wrap">
								<a href="#" class="btn-up-action">
									Edit profile
								</a>

								<a href="#" class="btn-up-action">
									<span class="me-2"><img src="<?php echo PATH_SN ?>/uploads/user-profile/share.png" alt="Share"></span>Share profile
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section class="pt-80 badges-section">
			<div class="container position-relative">
				<div class="row gy-5 gx-5">
					<div class="col-md-6">
						<h2 class="up-section-title text-white pb-4">
							BADGES
						</h2>
						<!-- Bagdes active -->
						<div class="badges-wrap">
							<div class="row">
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-big.svg">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-big-2.svg">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-big-3.svg">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-big-4.svg">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-big.svg">
									</a>
								</div>
							</div>
						</div>

						<!-- Bagdes inactive -->
						<div class="badges-wrap">
							<div class="row">
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-inactive.png">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-inactive.png">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-inactive.png">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn">
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/badge-inactive.png">
									</a>
								</div>
								<!-- Item -->
								<div class="col-20-sn badge-show-more-col">
									<a href="#" data-bs-toggle="modal" data-bs-target="#popupRaw1">
										<div class="badge-show-more-item">
											<div class="badge-show-more-count">
												+33
											</div>
										</div>
									</a>
								</div>

							</div>
						</div>


					</div>
					<div class="col-md-6">
						<h2 class="up-section-title text-white mb-4">
							DIGITAL COLLECTIBLES
						</h2>

						<div class="dc-image-list">
							<ul class="list-inline-sn">
								<li>
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/dgt1.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/dgt2.png">
									</a>
								</li>
								<li>
									<a href="#">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/dgt3.png">
									</a>
								</li>
							</ul>
						</div>
						<div class="dg-image-list-collection d-flex justify-content-end pt-3">
							<a href="javascript:void(0)" class="dg-collection-more-link d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#popupRaw2">
								<span class="me-3 text-white">View collection</span>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 320 512"><path fill="#ffffff" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
								</span>
							</a>
						</div>
					</div>

				</div>
				<!-- Separator -->
				<div class="row">
					<div class="col-12 pt-5">
						<div class="separator-sn"></div>
					</div>
				</div>

				<!-- Alien planet background -->
				<div class="ap-bg-img-wrap">
					<img class="ap-bg-img img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/bg-collection.png" alt="Alien planet">	
				</div>
				
			</div>
			
		</section>

		<!-- Collections slider -->
		<section class="pt-80 position-relative z-3" >
			<h2 class="mb-4 text-center section-title-marker">Collections</h2>

			<div class="collections-carousel-wrap">
				<div class="collections-carousel">


					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					<!-- Slide -->
					<div>
						<div class="cc-slide-inner">

							<img class="img-fluid polygon-top" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-top.png">
							<div class="cc-card-bg">
								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/cc-card-inactive-bg.png">
							</div>

							<div class="cc-card-content">
								<div class="cc-slide-img d-flex justify-content-center align-items-center">
									<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
								</div>
								<div class="cc-slide-name">
									<h5 class="text-white text-center">
										Rainbow Belts Line
									</h5>
								</div>
							</div>

							<img class="img-fluid polygon-bottom" src="<?php echo PATH_SN ?>/uploads/user-profile/polygon-bottom.png">

						</div>
					</div>

					
					
				</div>
			</div>
		</section>

		<!-- Collect rewards -->
		<section class="pt-100">
			<div class="container">
				<div class="row g-5 position-relative z-3">
					<div class="col-md-6">
						<h2 class="mb-4  section-title-marker">COLLECT REWARDS</h2>
						<p class="text-white mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beat</p>
						<a href="#" class="btn-main-web14">
						View Collection </a>
					</div>
					<div class="col-md-6 text-center text-md-end">
						<div class="cr-product-img position-relative z-3 ms-auto">
							<img class="img-fluid cr-product-img-bg" src="<?php echo PATH_SN ?>/uploads/user-profile/cr-sun-gr.png" alt="Sun">
							<div class="cr-product-img-item-wrap  z-4">
								<img src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Treasure" class="cr-product-img-item img-fluid" />
							</div>
						</div>
					</div>

				</div>

				<!-- Diadem -->
				<div class="row diadem-row">
					<div class="col-12 diadem-wrap">
						<img src="<?php echo PATH_SN ?>/uploads/user-profile/diadem-gr
					.png" alt="Diadem" class="cr-diadem img-fluid" />
					</div>
					<div class="col-12 position-relative z-2">
						<img src="<?php echo PATH_SN ?>/uploads/user-profile/diadem
					.png" alt="Diadem" class="cr-diadem img-fluid" />
					</div>
				</div>

				<div class="pt-80"></div>
				<!-- Timeline -->
				<div class="row pb-60">
					<div class="col-12">
						<div class="up-timeline-wrap">
							<div class="tm-items-wrapper">

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										1
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										2
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										3
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/treasure-small.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										4
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										5
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										6
									</div>
								</div>

								<!-- Step item -->
								<div class="tm-badge-wrap-item">
									<div class="tm-item-badge">
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
									</div>
									<!-- Step circle -->
									<div class="tm-item-circle-step">
										7
									</div>
								</div>


							</div>
							<div class="tm-line-wrapper position-relative">
								<div class="tm-line-full">
								</div>
								<div class="tm-line-steps">
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Flip cards grid -->

				<div class="row flip-cards-row">
					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>

					<!-- Card -->
					<div class="col-card-item">
						<div class="card-item">
							<div class="scene scene--card">
							  <div class="card-item-inner">
							    <div class="card__face card__face--front">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-front.png" alt="card front" class="card-grid-bg-front img-fluid" />
							    		<div class="card-face-content d-flex align-items-center">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>
							    			
							    		</div>
							    	</div>
							    	
							    </div>
							    <div class="card__face card__face--back" style="background-image: url(<?php echo PATH_SN ?>/uploads/user-profile/card-back-bg.png);background-size: cover;background-position: center center;">
							    	<div class="card-face-inner">
							    		<img src="<?php echo PATH_SN ?>/uploads/user-profile/card-grid-bg-back.png" alt="card front" class="card-grid-bg-back img-fluid" />
							    		<div class="card-face-content d-flex align-items-end">
							    			<div class="text-center">
							    				<h5 class="text-white font-marker">CARMEL APPLE CRISP</h5>	
							    			</div>

							    			<!-- Badge -->
							    			
							    			<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="" class="card-badge-small badge-card-small img-fluid" />
							    			
							    			
							    		</div>
							    	</div>
							    </div>
							  </div>
							</div>
						</div>
					</div>


				</div>
				<!-- Flip cards grid end -->

			</div>
		</section>

		<!-- ############POPUPS############## -->
		<!-- Popup 1 -->
		<div class="modal fade popup-sn-1" id="popupRaw1" tabindex="-1" aria-labelledby="popupRaw1Label" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-xl-down">
		    <div class="modal-content">
		      <div class="modal-header border-0">
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
		        	<svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 384 512"><path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
		        </button>
		      </div>
		      <div class="modal-body">
		         <div class="text-center popup-sn-1-image py-4">
		         	<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Skarb">
		         </div>
		         <div class="py-3 mw-800">
		         	<h3 class="mb-4  section-title-marker text-center popup-heading">COLLECT REWARDS</h3>
		         	<p class="text-white text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		         	tempor incididunt ut labore et dolore magna aliqua. hhh</p>
		         </div>
		         <div class="pb-5 text-center">
		         	<a href="#" class="btn-main-web14" >
						View Collection
					</a>
		         </div>

		      </div>
		    </div>
		  </div>
		</div>

		<!-- Popup 1 end -->

		<!-- Popup 2 -->

		<div class="modal fade popup-sn-1" id="popupRaw2" tabindex="-1" aria-labelledby="popupRaw2Label" aria-hidden="true">
		  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-xl-down">
		    <div class="modal-content">
		      <div class="modal-header border-0">
		        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
		        	<svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 384 512"><path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
		        </button>
		      </div>
		      <div class="modal-body">
		       	 <div class="modal-inner-sn px-4 py-2">
		       	 	<div class="row g-5">
		       			<div class="col-lg-4">
		       				<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/popup2ftr.jpg" alt="Product">
		       			</div>
		       			<div class="col-lg-8 popup-2-right-col">
		       				<h3 class="popup-heading-small section-title-marker text-white mb-4">Lorem ipusm</h3>
		       				<div class="mb-4">
		       					<div class="icon-text-item d-flex">
		       						<div class="iti-icon">
		       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
		       						</div>
		       						<div class="iti-text">
		       							<h5 class="unique-nft-tokes text-white fs-18">
		       								0X6548655448844848478484648488448...444844848448488
		       							</h5>
		       							<p class="popup-text-opc">
		       								Lorem ipsum dolor sit amet, consectetur adipisicing elit
		       							</p>
		       						</div>

		       					</div>
		       				</div>
		       				<div class="mb-4">
		       					<p class="popup-text-opc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		       					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		       					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		       					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		       					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		       					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		       				</div>

		       				<!-- Icon text items container -->
		       				<div class="iti-container pt-3">
		       					
		       					<!-- row -->
		       					<diw class="row g-4 mb-4">

		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>
		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>

		       					</diw>
		       					<!-- row -->
		       					<diw class="row g-4 mb-4">

		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>
		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>

		       					</diw>

		       					<!-- row -->
		       					<diw class="row g-4 mb-4">

		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>
		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>

		       					</diw>

		       					<!-- row -->
		       					<diw class="row g-4 mb-4">

		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>
		       						<!-- Item -->
		       						<div class="col-lg-6">
		       							<div class="icon-text-item iti-bordered d-flex">
				       						<div class="iti-icon">
				       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/bin-star.png" alt="Star">
				       						</div>
				       						<div class="iti-text">
				       							<h5 class="unique-nft-tokes text-white fs-18 text-uppercase">
				       								Lorem ipsum
				       							</h5>
				       							<p class="popup-text-opc">
				       								Lorem ipsum dolor sit amet
				       							</p>
				       						</div>

				       					</div>
		       						</div>

		       					</diw>

		       				</div>


		       				<!-- Badges container -->
		       				<div class="iti-badges-container py-5">
		       					<h3 class="popup-heading-small section-title-marker text-white mb-4">Badges</h3>
		       					<div class="row g-4">

		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge1.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge2.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge3.png" alt="Star">
		       							</a>
		       						</div>

		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge1.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge2.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge3.png" alt="Star">
		       							</a>
		       						</div>

		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge1.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge2.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge3.png" alt="Star">
		       							</a>
		       						</div>

		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge1.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge2.png" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Item -->
		       						<div class="iti-badge-col">
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge3.png" alt="Star">
		       							</a>
		       						</div>





		       					</div>
		       				</div>



		       			</div>
		       		</div>

		       		<!-- Slider carousel -->
		       		<div class="row g-5">
		       			<div class="col-12 pt-3 pb-5">
		       				<h3 class="popup-heading-small section-title-marker text-white text-center mb-4">Digital collectibles</h3>

		       				<!-- Slider carousel -->
		       				<div class="popup-raw-2-carousel-wrap">
		       					<div class="popup-raw-2-carousel dots-squared">
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide2.jpg" alt="Star">
		       							</a>
		       						</div>
		       						<!-- Slide -->
		       						<div>
		       							<a href="#">
		       								<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/slide1.jpg" alt="Star">
		       							</a>
		       						</div>

		       					</div>

		       					<!-- Custom arrows -->
		       					<div class="popup-raw-2-carousel-arrows">
		       						<div class="p2-arrow-left">
		       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/chevron-left.svg" alt="Left">
		       						</div>
		       						<div class="p2-arrow-right">
		       							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/chevron-right.svg" alt="Right">
		       						</div>
		       					</div>
		       				</div>
		       				<!-- Slider end -->
		       			</div>
		       		</div>


		       	 </div>
		      </div>
		    </div>
		  </div>
		</div>
		<!-- POpup 2 end -->


		<!-- Popup 3 - slide modal -->
		<div class="popupRaw3-wrapper" id="popupRaw3">
			<div class="popupRaw3-inner">

				<!-- Mobile close btn -->
				<div id="popupRaw3-mobile-close-btn">
					<svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 384 512"><path fill="#ffffff" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
				</div>

				<div class="popupRaw3-content">
					
					<div class="container-lg">
						<div class="row g-5">
							<div class="col-md-6">
								<div class="popupRaw3-left-col-content">
									<div class="p3r-inner">
										<!-- Group -->
										<div class="p3r-inner-group">
											<h4 class="text-white section-title-marker fs-28">Badges</h4>	
											<p class="popup-text-opc">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

											<div class="badges-opc-container pt-4">
												<div class="row">
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

												</div>
											</div>
										</div>
										<!-- group end -->
										<!-- Group -->
										<div class="p3r-inner-group">
											<h4 class="text-white section-title-marker fs-28">Badges</h4>	
											<p class="popup-text-opc">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

											<div class="badges-opc-container pt-4">
												<div class="row">
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

												</div>
											</div>
										</div>
										<!-- group end -->
										<!-- Group -->
										<div class="p3r-inner-group">
											<h4 class="text-white section-title-marker fs-28">Badges</h4>	
											<p class="popup-text-opc">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

											<div class="badges-opc-container pt-4">
												<div class="row">
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-1.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-2.png" >
														</div>
													</div>
													<!-- item -->
													<div class="col-xl-2 col-lg-3 col-md-3 col-sm-2 col-4">
														<div class="badge-item-wrap-p3">
															<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/b-opc-3.png" >
														</div>
													</div>

												</div>
											</div>
										</div>
										<!-- group end -->

									</div>
									
								</div>
							</div>
							<div class="col-md-6 p3-right-col-6">
								<div class="p3-inner-scrolled">
									<div class="pb-5 text-center p3-right-ftr-img">
										<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/crab.png" >
									</div>
									<div>
										<h4 class="text-white section-title-marker fs-28 text-center mb-5">Lorem ipsum</h4>
										<div class="p3-right-ftr-box">
											<h5 class="text-white text-center mb-4">Sed ut perspiciatis unde</h5>

											<div>
												<!-- item -->
												<div class="p3-text-icon-item">
													<div class="p3-text-icon-icon">
														<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge-icon-text-p3.png" >
													</div>
													<div class="p3-text-icon-text">
														<h6 class="text-white">Sed ut perspiciatis</h6>
														<p class="popup-text-opc fs-16">Sed ut perspiciatis</p>
													</div>
												</div>

												<!-- item -->
												<div class="p3-text-icon-item">
													<div class="p3-text-icon-icon">
														<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge-icon-text-p3.png" >
													</div>
													<div class="p3-text-icon-text">
														<h6 class="text-white">Sed ut perspiciatis</h6>
														<p class="popup-text-opc fs-16">Sed ut perspiciatis</p>
													</div>
												</div>

												<!-- item -->
												<div class="p3-text-icon-item">
													<div class="p3-text-icon-icon">
														<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge-icon-text-p3.png" >
													</div>
													<div class="p3-text-icon-text">
														<h6 class="text-white">Sed ut perspiciatis</h6>
														<p class="popup-text-opc fs-16">Sed ut perspiciatis</p>
													</div>
												</div>


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<div id="popupRaw3-trigger">
					<div class="popupRaw3-trigger-inner">
						<div class="p3-trigger-img">
							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge-trigger-top.png" alt="Left">
						</div>
						<div class="p3-trigger-heading">
							<h4 class="text-white section-title-marker">Badges</h4>
						</div>

						<div class="p3-trigger-img">
							<img class="img-fluid" src="<?php echo PATH_SN ?>/uploads/user-profile/popup/badge-trigger-bottom.png" alt="Left">
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<!-- Popup 3 - slide modal end -->







	</main><!-- #main -->


	<script type="text/javascript">
		jQuery(document).ready(function($) {

			// Header on scroll
		  	const upHeader = $('#user-profile-header');
		  	$(window).scroll(function() {
			    let scrollTop = window.scrollY;

			    if(scrollTop > 100){
			    	$('#user-profile-header').css({
			    		"background" : "#080124",
			    		"padding-top" : "0"
			    	});
			    }else{
			    	$('#user-profile-header').css({
			    		"background" : "transparent",
			    		"padding-top" : "15px"
			    	});
			    }
			    
			});

		  	// Collections slider
		  	$('.collections-carousel').slick({
			  dots: true,
			  arrows : false,
			  infinite: true,
			  centerMode: true,
  			  centerPadding: '100px',
			  speed: 500,
			  slidesToShow: 5,
			  slidesToScroll: 1,
			  responsive: [
			  	{
			      breakpoint: 1240,
			      settings: {
			        slidesToShow: 5,
			        slidesToScroll: 1,
			        centerMode: true,
  			  		centerPadding: '0px',
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			        centerMode: true,
  			  		centerPadding: '0px',
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 3,
			        centerMode: true,
  			  		centerPadding: '0px',
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        centerMode: true,
  			  		centerPadding: '0px',
			        slidesToScroll: 1
			      }
			    }
			 
			  ]
			});


			// Flip card
			var cards = document.querySelectorAll('.card-item-inner');
			cards.forEach(function(card){
				card.addEventListener( 'click', function() {
				  card.classList.toggle('is-flipped');
				});
			});

			
			// Flip card end

			// Card dynamic height 

		    var imgHeight = $('.card-item-inner img').height() + 12 + "px";
		    
		    $('.card-item-inner').css('height', imgHeight);

		    $(window).resize(function() {
		      var imgHeight = $('.card-item-inner img').height() + 12 + "px";
		      $('.card-item-inner').css('height', imgHeight);
		    });


		    /*
			** Popup raw 2 slider carousel
		    */

		    $('.popup-raw-2-carousel').slick({
			  dots: true,
			  // arrows:false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 6,
			  slidesToScroll: 1,
			  prevArrow: $('.p2-arrow-left') ,
			  nextArrow: $('.p2-arrow-right') ,
			  responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 1,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1
			      }
			    },
			     {
			      breakpoint: 760,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    
			  ]
			});

			// Refresh slick on modal open
			$('#popupRaw2').on('shown.bs.modal', function () {
			    $('.popup-raw-2-carousel').slick('setPosition');
			});

			// Popup 3 - slide left 

			var popupRaw3 = $('#popupRaw3');
		    var popupRaw3Width = popupRaw3.outerWidth();

		    popupRaw3.css('left', -popupRaw3Width + 'px');

		    $('#popupRaw3-trigger').on('click', function() {
		        if (popupRaw3.hasClass('open')) {
		            popupRaw3.css('left', -popupRaw3Width + 'px');
		        } else {
		            popupRaw3.css('left', 0);
		            // popup.css('transform', 'translateX(-50%)');
		        }
		        popupRaw3.toggleClass('open');
		    });

		    // Mobirle close btn
		    $('#popupRaw3-mobile-close-btn').on('click', function(){
		    	popupRaw3.css('left', -popupRaw3Width + 'px');
		    	popupRaw3.removeClass('open');
		    })

		    $(window).resize(function() {
		        popupRaw3Width = popupRaw3.outerWidth();
		        if (!popupRaw3.hasClass('open')) {
		            popupRaw3.css('left', -popupRaw3Width + 'px');
		        }
		    });
			// Popup 3 end



		  
		});
	</script>

	
<?php
get_footer();
