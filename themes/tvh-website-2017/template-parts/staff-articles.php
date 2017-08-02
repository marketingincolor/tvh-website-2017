<?php
	// Custom Widget for Staff Location Pages
	// 
	$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
	$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
	$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
	$dr_location = get_field('location') ? get_field('location') : "" ;
	?>

	<div class="staff-widget-title">
		Articles by <?php echo $doctor; ?>
	</div>
	<div class="staff-widget-container">
		Insert content here
	</div>
