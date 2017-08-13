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
		Make An Appointment
	</div>
	<div class="staff-widget-container">

		<h3>Current Patients:</h3>
		<p>Please contact your Care Center to make an appointment with our behavioral health staff and to learn about insurance coverage for these services.</p>
		<h3>Not a Patient Yet?</h3>
		<p>You must be a primary care patient of The Villages Health to receive care from our behavioral health staff. Please contact a Care Center near you to learn more about becoming our patient and the insurance that we accept.</p>

	</div>

