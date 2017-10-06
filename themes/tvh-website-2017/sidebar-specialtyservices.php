<?php
/**
 * The sidebar containing specific services / specialty care page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php if ( $location != "" ) : ?>
	<article id="widget-1" class="widget widget-location">
		<?php get_template_part( 'template-parts/side-location' ); ?>
	</article>
	<?php endif; ?>

	<?php if ( (is_single('cardiology')) || (is_single('endocrinology')) || (is_single('gastroenterology')) || (is_single('general-surgery')) || (is_single('gynecology')) || (is_single('orthopaedics')) || (is_single('rheumatology')) ) : 
		$bw_location = 'Brownwood Care Center' ;
		$bw_url = 'brownwood-care-center';
		$bwloc_id = get_id_by_slug( $bw_location, 'location' );
		$bw_address = get_post_meta($bwloc_id, '_location_address', true);
		$bw_town = get_post_meta($bwloc_id, '_location_town', true);
		$bw_state = get_post_meta($bwloc_id, '_location_state', true);
		$bw_zip = get_post_meta($bwloc_id, '_location_postcode', true);
		$bw_country = get_post_meta($bwloc_id, '_location_country', true);
		//$bw_phone = get_post_meta($bwloc_id, 'location_phone', true);
		$bw_phone = '352-674-8700';
		//$bw_time = get_post_meta($bwloc_id, 'location_time', true);
		$bw_time = 'Mon.-Fri., 8am-5pm';
	?>
	<article id="widget-1" class="widget widget-location">
		<div class="staff-widget-title">
			<?php echo $bw_location; ?>
		</div>
		<div class="staff-widget-container">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-phone.png" alt="Phone Number:">
			<h3 class="context"><?php echo $bw_phone; ?></h3>
			<a href="<?php echo site_url('/care-centers/') . $bw_url; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-address.png" alt="Address:"></a>
			<h4 class="context"><?php echo $bw_address; ?><br>
			<?php echo $bw_town; ?>, <?php echo $bw_state; ?>, <?php echo $bw_zip; ?></h4>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-hours.png" alt="Office Hours:">
			<h4>Office Hours:<br><?php echo $bw_time; ?></h4>
		</div>
	</article>
	<?php endif; ?>

	<?php if ( is_single('audiology') ) : ?>
		<article id="widget-1a" class="widget widget-custom">
			<div class="staff-widget-title">
				Specialty Care Center
			</div>
			<div class="staff-widget-container">
				<p>To make an appointment, call (352) 674-1700</p>
			</div>
		</article>
	<?php endif; ?>

	<article id="widget-2" class="widget widget-insurance">
		<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/provider-download' ); ?>
	</article>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>