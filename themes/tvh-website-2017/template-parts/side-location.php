<?php
	// Custom Widget for Location Information
	// 
	$show_location = get_field('carecenter') ? get_field('carecenter') : "" ;
	if ( $show_location != "" ) {
		$location_id = get_id_by_slug( $show_location, 'location' );
	} else {
		$location_id = get_the_id();
		$show_location = 'Contact Us';
	}
	if ( $show_location == 'Specialty Care Center' ) {
		$show_location = $show_location . 's';
	}
	//$location_url = get_post_meta($location_id, '_location_slug', true);
	$location_url = get_page_uri($location_id);
	$location_address = get_post_meta($location_id, '_location_address', true);
	$location_town = get_post_meta($location_id, '_location_town', true);
	$location_state = get_post_meta($location_id, '_location_state', true);
	$location_zip = get_post_meta($location_id, '_location_postcode', true);
	$location_country = get_post_meta($location_id, '_location_country', true);
	$location_phone = get_post_meta($location_id, 'location_phone', true);
	$location_time = get_post_meta($location_id, 'location_time', true);

	if ( (is_single('dermatology')) || (is_single('neurology')) ) {
		$location_url = 'brownwood-care-center';
		$location_address = '2910 Brownwood Blvd.';
		$location_town = 'The Villages';
		$location_state = 'FL';
		$location_zip = '32159';
	}
	if ( is_single('urology') ) {
		$location_address = '1400 US Hwy. 441 N., Ste. 810';
		$location_town = 'The Villages';
		$location_state = 'FL';
		$location_zip = '32159';
	}
	if ( (is_single('neurology')) || (is_single('urology')) ) {
		$location_phone = '352-674-8700';
	}

?>

	<div class="staff-widget-title">
		<?php echo $show_location; ?>
	</div>
	<div class="staff-widget-container">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-phone.png" alt="Phone Number:">
		<h3 class="context"><?php echo $location_phone; ?></h3>
		<a href="<?php echo site_url('/care-centers/') . $location_url; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-address.png" alt="Address:"></a>
		<h4 class="context"><?php echo $location_address; ?><br>
		<?php echo $location_town; ?>, <?php echo $location_state; ?>, <?php echo $location_zip; ?></h4>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-hours.png" alt="Office Hours:">
		<h4>Office Hours:<br><?php echo $location_time; ?></h4>

	</div>

