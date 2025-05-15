<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package great_park
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>

	<!-- Slick CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">

	<!-- Slick JS -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/menu/nav.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<!-- end style -->

	<!-- strat js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCB4IzLHioF6aFVpgfp3Z6VSvTZ4Du-yM&callback=initMap" async defer></script>

	<!-- jQuery CDN -->

	<!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.2js"></script> -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.min.css" />
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/menu/bootstrap.bundle.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/menu/nav.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/aos/aos.js"></script>

<!-- Testimonial Api -->

 <script src="https://api.homecare.co.uk/assets/js/review_widget_carousel.js?displaydiv=tgrcw_fae53e05&displayid=65432212822&displaycount=10&displaylogo=true&displayscore=true&displaybackground=true&displayratingreview=true&displaylink=true&displayminoverallrating=5&linksnofollow=false"></script>



	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'great-park' ); ?></a>

	<header id="masthead" class="site-header fixed-top transition-header">
		<!-- Desktop Navbar -->
		<div class="container-fluid d-none d-lg-flex align-items-center py-3 desknav">
				<div class="row align-items-center w-100 flex-nowrap px-120px">
					<div class="col-xl-2 col-md-2 d-flex justify-content-center align-items-center ">
						<div class="site-branding img-fluid">
						<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="d-flex col-xl-7 col-md-8 justify-content-evenly align-items-center">
						<nav id="site-navigation" class="site-navigation d-flex align-items-center flex-wrap justify-content-center gap-5">
							<?php
							wp_nav_menu([
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'menu_class'     => 'navbar-nav d-flex flex-row flex-wrap gap-3 text-uppercase small fw-bold mb-0',
								'add_li_class'   => 'nav-item position-relative',
								'link_class'     => 'nav-link text-white',
							]);
							?>
						</nav>

					</div>
						<div class="col-xl-3 col-md-2 d-flex justify-content-evenly align-items-center flex-wrap gap-3">
						<a href="<?php echo get_template_directory_uri();?>/assets/images/Brochure.pdf" class="icon1" target="_blank">
							<i class="fa-solid fa-download"></i>
							BROCHURE
						</a>

							<a class="icon2" href="tel:<?php echo do_shortcode('[site_info key="phone2"]'); ?>">
								<i class="fa-solid fa-phone"></i>
								<?php echo do_shortcode('[site_info key="phone2"]'); ?>
							</a>

						</div>	
				</div>
			</div>
			<div class="phone-nav d-flex d-lg-none position-reltive w-100 px-3">
				<div class="d-flex align-items-center w-100">
					<div class="eader-logo-phone">
						<div class="logo-wrapper">
							<?php the_custom_logo(); ?>
							</div>
					</div>
					<div class="d-flex align-items-center justify-content-center user_icons">
					<a href="<?php echo get_template_directory_uri();?>/assets/images/Brochure.pdf" class="download_icons" title="DOWNLOAD BROCHURE" target="_blank">
						<i class="fa-solid fa-download"></i>
						</a>

						<a href="tel:<?php echo do_shortcode('[site_info key="phone2"]'); ?>" class="icon2" data-toggle="tooltip" data-placement="bottom" title="<?= do_shortcode('[site_phone]'); ?>">
						<i class="fa-solid fa-phone"></i>
						</a>

					</div>
					<div class="header-nav flex-grow-1">
						<div id="swipe_overlay"></div>
						<div id="swipeNav">
							<div class="pull_nav_close text-center">
								<a href="javascript:void(0);" id="closeBtn" class="pull-close-nav">
									<span class="n"></span>
									<span class="g"></span>
									<span class="s"></span>
								</a>
							</div>
							<div id="main_nav" class="main_nav">
								<?php
								wp_nav_menu([
									'theme_location' => 'menu-1',
									'menu_class'     => 'top_nav',
									'menu_id'        => 'top_nav',
									'container'      => false,
								]);
								?>
							</div>
						</div>
					</div>

					<div id="pull_nav" class="d-flex">
						<a id="menuBtn" class="pull-nav">
							<span class="n"></span>
							<span class="g"></span>
							<span class="s"></span>
						</a>
					</div>
				</div>


			</div>
		</header>

		<script>
			$(function () {
			$('[data-toggle="tooltip"]').tooltip()
			})
			document.addEventListener('DOMContentLoaded', function() {
				const headers = document.querySelectorAll('.transition-header, .phone-nav');

				window.addEventListener('scroll', function() {
					const shouldScroll = window.scrollY > 50;
					headers.forEach(header => header.classList.toggle('scrolled', shouldScroll));
				});
			});
		</script>

		<body>
			<div class="container-starter"></div>