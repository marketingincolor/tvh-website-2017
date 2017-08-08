<?php
// Custom Widget for Staff Location Pages
// 
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
$dr_location = get_field('location') ? get_field('location') : "" ;
?>


<!--DOCTOR TEMPLATE -->
<section id="all-doctors">
	<div class="row">
		<div class="meet-your-care-team small-12-columns">
		<h3>Meet Your Care Team</h3>
		</div>
	</div>

	<div class="row">
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center">
				<img src="http://via.placeholder.com/150x150">
				<p>John Doe, CRED.</p>
				<p><em>Medical Director</em></p>
				<!--IF HAS BIO ADD HERE -->

				<!--END IF HAS BIO-->
				<p class="btn-box"><a href="#" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
		<!-- end loop to display team -->
	</div>
</section>
<!--END DOCTOR TEMPLATE-->
