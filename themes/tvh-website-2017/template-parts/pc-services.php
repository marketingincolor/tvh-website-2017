<?php
	// Custom Widget for Staff Location Pages
	// 
	$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
	$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
	$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
	$dr_location = get_field('location') ? get_field('location') : "" ;

?>

	<div class="staff-widget-title">
		Primary Care Services
	</div>
	<div class="staff-widget-container">
		<p>Learn everything you need to know about becoming a primary care patient and its many convenient benefits.</p>
		<a href="<?php echo site_url(); ?>/services/primary-care"><button class="cta-button orange">Learn More</button></a>
	</div>