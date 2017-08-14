<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$slug = get_post_field( 'post_name', get_post() );
switch($slug) {
	case 'specialty-services':
		get_template_part( 'sidebar-specialtyservices' );
		break;
	case 'why-choose-tvh':
		get_template_part( 'sidebar-whychoose' );
		break;
	case 'news':
		get_template_part( 'sidebar-news' );
		break;
	case 'for-patients':
		get_template_part( 'sidebar-forpatients' );
		break;
	case 'care-centers':
		get_template_part( 'sidebar-carecenters' );
		break;
	case 'contact':
		get_template_part( 'sidebar-carecenters' );
		break;
	case 'doctor-recruitment':
		get_template_part( 'sidebar-recruit' );
		break;
	case 'general-recruitment':
		get_template_part( 'sidebar-recruit' );
		break;
	case 'accepted-insurance':
		get_template_part( 'sidebar-tlc' );
		break;
	case 'become-a-patient':
		get_template_part( 'sidebar-tlc' );
		break;
	default:
		echo '<aside class="sidebar">';
		do_action( 'foundationpress_before_sidebar' );
		dynamic_sidebar( 'sidebar-widgets' );
		do_action( 'foundationpress_after_sidebar' );
		echo '</aside>';
		break;		
}
?>
<!--<?php if ( is_page('specialty-services') ) : ?>
	<?php get_template_part( 'sidebar-specialtyservices' ); ?>
<?php elseif ( is_page('why-choose-tvh') ) : ?>
	<?php get_template_part( 'sidebar-whychoose' ); ?>
<?php elseif ( is_page('news') ) : ?>
	<?php get_template_part( 'sidebar-news' ); ?>
<?php elseif ( is_page('for-patients') ) : ?>
	<?php get_template_part( 'sidebar-forpatients' ); ?>
<?php else : ?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
<?php endif; ?>-->