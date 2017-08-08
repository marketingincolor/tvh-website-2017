<?php
/**
 * The sidebar containing specific location page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	$location_id = get_the_id();

	$location_address = get_post_meta($location_id, '_location_address', true);
	$location_town = get_post_meta($location_id, '_location_town', true);
	$location_state = get_post_meta($location_id, '_location_state', true);
	$location_zip = get_post_meta($location_id, '_location_postcode', true);
	$location_country = get_post_meta($location_id, '_location_country', true);
	
	$location_phone = get_post_meta($location_id, 'location_phone', true);
	$location_time = get_post_meta($location_id, 'location_time', true);
?>
<aside class="sidebar sidebar-location">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-photo">
		Insert Smaller Location Photo
	</article>
	<article id="widget-2" class="widget widget-location">
		<?php get_template_part( 'template-parts/side-location' ); ?>
	</article>
	<article id="widget-3" class="widget widget-map">

		<?php echo do_shortcode('[location post_id="118"]#_LOCATIONMAP[/location]'); ?>
	</article>
	<article id="widget-4" class="widget widget-insurance">
		<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
	</article>
	<article id="widget-5" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/provider-download' ); ?>
	</article>
	<!-- <article id="widget-4" class="widget widget-dr-articles">
		<?php //get_template_part( 'template-parts/staff-articles' ); ?>
	</article> -->
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
