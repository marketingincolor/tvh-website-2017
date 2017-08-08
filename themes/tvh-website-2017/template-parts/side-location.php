<?php
	// Custom Widget for Location Information
	// 
	$dr_location = get_field('carecenter') ? get_field('carecenter') : "" ;
	if ( $dr_location != "" ) {
		$location_id = get_id_by_slug( $dr_location, 'location' );
	} else {
		$location_id = get_the_id();
		$dr_location = 'Contact Us';
	}

	$location_address = get_post_meta($location_id, '_location_address', true);
	$location_town = get_post_meta($location_id, '_location_town', true);
	$location_state = get_post_meta($location_id, '_location_state', true);
	$location_zip = get_post_meta($location_id, '_location_postcode', true);
	$location_country = get_post_meta($location_id, '_location_country', true);
	
	$location_phone = get_post_meta($location_id, 'location_phone', true);
	$location_time = get_post_meta($location_id, 'location_time', true);
?>

	<div class="staff-widget-title">
		<?php echo $dr_location; ?>
	</div>
	<div class="staff-widget-container">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-phone.png" alt="Phone Number:">
		<h3><?php echo $location_phone; ?></h3>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-address.png" alt="Address:">
		<h4><?php echo $location_address; ?><br>
		<?php echo $location_town; ?>, <?php echo $location_state; ?>, <?php echo $location_zip; ?></h4>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-loc-ico-hours.png" alt="Office Hours:">
		<h4>Office Hours:<br><?php echo $location_time; ?></h4>

	</div>

