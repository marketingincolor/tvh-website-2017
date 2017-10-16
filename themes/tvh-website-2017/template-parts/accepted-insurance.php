<?php
	// Custom Widget for Staff Location Pages
	// 
	$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
	$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
	$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
	$dr_location = get_field('location') ? get_field('location') : "" ;
?>
<?php if ( is_single('psychiatry') ) : ?>
	<div class="staff-widget-title">
		Accepted Insurance
	</div>
	<div class="staff-widget-container">
		<p>See the list of insurance policies that we accept for primary care.</p>
		<p><a href="<?php echo site_url(); ?>/for-patients/primary-accepted-insurance/"><button class="cta-button orange">Primary Care</button></a></p>
	</div>
<?php elseif ( is_single('audiology') ) : ?>
	<div class="staff-widget-title">
		Accepted Insurance
	</div>
	<div class="staff-widget-container">
		<p>TVH Audiology works with most insurance plans.</p>
	</div>
<?php else : ?>
	<div class="staff-widget-title">
		Accepted Insurance
	</div>
	<div class="staff-widget-container">
		<p>See the list of insurance plans that we accept.</p>
		<p><a href="<?php echo site_url(); ?>/for-patients/primary-accepted-insurance/"><button class="cta-button orange">Primary Care</button></a></p>
		<p><a href="<?php echo site_url(); ?>/for-patients/specialty-accepted-insurance/"><button class="cta-button orange">Specialty Care</button></a></p>
	</div>
<?php endif; ?>