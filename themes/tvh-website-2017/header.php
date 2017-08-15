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
$options = get_option('tvh_theme_options');
$number = $options['tvh_pn_textbox'];
$justnumber = preg_replace('/[^A-Za-z0-9]/', '', $number);
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php if ( is_page($post_slug) ) { body_class( $post_slug ); } else { body_class(); } ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	
	<div class="site-top collapse-for-medium-up">
		<div class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-logo-header-main.png" alt="<?php bloginfo( 'name' ); ?>" /></a></div>
		<div class="site-cta">
		<?php 
		if ( $options['tvh_pn_textbox'] != null || $options['tvh_pn_textbox'] != "" ) : ?>
			<!--<a href="tel:<?php echo $justnumber; ?>">--><button class="special-button orange"><?php echo $options['tvh_pn_textbox']; ?></button><!--</a>-->
		<?php endif; ?>
			<a href="<?php echo site_url(); ?>/for-patients/request-an-appointment/" class="bcta-center"><button class="top-button orange">Make An Appointment</button></a>
			<a href="https://mycw42.eclinicalweb.com/portal4749/jsp/100mp/login_otp.jsp" target="_blank"><button class="top-button orange">Patient Portal</button></a>
		</div>
	</div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>
	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>
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
