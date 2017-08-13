<?php
/**
 * The sidebar containing specific location page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	$location_id = get_the_id();
	$location_code = '[location post_id="'.$location_id.'"]#_LOCATIONMAP[/location]';
	$location_address = get_post_meta($location_id, '_location_address', true);
	$location_town = get_post_meta($location_id, '_location_town', true);
	$location_state = get_post_meta($location_id, '_location_state', true);
	$location_zip = get_post_meta($location_id, '_location_postcode', true);
	$location_country = get_post_meta($location_id, '_location_country', true);
	$location_phone = get_post_meta($location_id, 'location_phone', true);
	$location_time = get_post_meta($location_id, 'location_time', true);
	$location_slug = get_post_field('post_name', $location_id);
?>
<aside class="sidebar sidebar-location">
<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php if ( $location_slug != 'acute-care-clinic' ) : ?>
		<article id="widget-1" class="widget widget-photo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-<?php echo $location_slug; ?>-sidebar.jpg">
		</article>
	<?php endif; ?>
		<article id="widget-2" class="widget widget-location">
			<?php get_template_part( 'template-parts/side-location' ); ?>
		</article>
		<article id="widget-3" class="widget widget-map">
			<?php echo do_shortcode($location_code); ?>
		</article>
	<?php if ( $location_slug != 'acute-care-clinic' ) : ?>
		<article id="widget-4" class="widget widget-insurance">
			<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
		</article>
		<article id="widget-5" class="widget widget-services">
			<?php get_template_part( 'template-parts/pc-services' ); ?>
		</article>
	<?php endif; ?>
		<article id="widget-5" class="widget widget-directory-dl">
			<?php get_template_part( 'template-parts/provider-download' ); ?>
		</article>
<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
