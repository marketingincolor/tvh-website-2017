<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
//Get Custom Theme Options
global $post;
$post_slug = $post->post_name;
$location_id = get_the_id();
$location_phone = get_post_meta($location_id, 'location_phone', true);
$options = get_option('tvh_theme_options');
if ($location_phone != "") {
	$number = $location_phone;
} else {
	$number = $options['tvh_pn_textbox'];
}
$justnumber = preg_replace('/[^A-Za-z0-9]/', '', $number);
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<script src="https://www.youtube.com/iframe_api"></script>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W3NRWG');</script>
		<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<?php wp_head(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/js.cookie.js"></script>
		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-951156-27"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments)};
		  gtag('js', new Date());
		  gtag('config', 'UA-951156-27');
		</script>
	</head>
	<body <?php if ( is_page($post_slug) ) { body_class( $post_slug ); } else { body_class(); } ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3NRWG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="site-top collapse-for-medium-up">
		<div class="site-logo hide-for-small-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-logo-header-main.png" alt="<?php bloginfo( 'name' ); ?>" /></a>

			<header class="site-header" role="banner">
				<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?> data-hide-for="large">
					<div class="title-bar-right">
						<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button><span class="site-mobile-title title-bar-title">Menu</span>
					</div>
				</div>
			</header>


		</div>
		<div class="site-logo hide-for-medium"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-logo-header-main-sm.png" alt="<?php bloginfo( 'name' ); ?>" /></a>


			<header class="site-header" role="banner">
				<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?> data-hide-for="large">
					<div class="title-bar-right">
						<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button><span class="site-mobile-title title-bar-title">Menu</span>
					</div>
				</div>
			</header>


		</div>
		<div class="site-cta">
		<?php if ( $options['tvh_pn_textbox'] != null || $options['tvh_pn_textbox'] != "" ) : ?>
			<button class="special-button orange hide-for-small-only"><?php echo $number; ?></button>
			<a href="tel:<?php echo $justnumber; ?>" class="hide-for-medium"><button class="special-button orange"><?php echo $number; ?></button></a>
		<?php endif; ?>
			<a href="<?php echo site_url(); ?>/for-patients/request-an-appointment/" class="bcta-center"><button class="top-button orange">Request An Appointment</button></a>
			<a href="https://mycw42.eclinicalweb.com/portal4749/jsp/100mp/login_otp.jsp" target="_blank"><button class="top-button orange">Patient Portal</button></a>
		</div>
	</div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<header class="site-header" role="banner">
		<!--<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?> data-hide-for="large">
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">Menu</span>
			</div>
		</div>-->
		<nav class="site-navigation top-bar" role="navigation">
			<!--<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>-->
			<div class="top-bar-nav">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
