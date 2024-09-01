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
									<a href="#">
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
							<a href="" class="dg-collection-more-link d-flex align-items-center">
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
				<div class="row g-5 pb-5">
					<div class="col-md-6">
						<h2 class="mb-4  section-title-marker">COLLECT REWARDS</h2>
						<p class="text-white mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beat</p>
						<a href="#" class="btn-main-web14">
						View Collection</a>
					</div>
					<div class="col-md-6 text-end">
						<div class="cr-product-img position-relative z-3 ms-auto">
							<img class="img-fluid cr-product-img-bg" src="<?php echo PATH_SN ?>/uploads/user-profile/cr-sun.png" alt="Sun">
							<div class="cr-product-img-item-wrap  z-4">
								<img src="<?php echo PATH_SN ?>/uploads/user-profile/skarb.png" alt="Treasure" class="cr-product-img-item img-fluid" />
							</div>
						</div>
					</div>

				</div>

				<!-- Diadem -->
				<div class="row">
					<div class="col-12">
						<img src="<?php echo PATH_SN ?>/uploads/user-profile/diadem.png" alt="Diadem" class="cr-diadem img-fluid" />
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
										<img src="<?php echo PATH_SN ?>/uploads/user-profile/badge-timeline.png" alt="Badge">
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
			</div>
		</section>

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

		  
		});
	</script>

	
<?php
get_footer();
