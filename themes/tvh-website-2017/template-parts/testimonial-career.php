<?php
// Display Specific Client Testimonial in full-width container above footer
// of career pages on the TVH site.
// 

$testimonial = Array(
		'<h3>"I joined The Villages Health because I knew that this is the way medicine should be done. I didn’t want to miss out. I wanted to be part of this."</h3><h4>Laura Cloukey, DO, Medical Director of Pinellas Care Center</h4>',
		'<h3>"I\'m honored to be part of a team where coordination between primary care physicians and specialists is life-saving for those with serious health issues."</h3><h4>Robert Herman, MD, FACP, FACC</h4>',
		'<h3>"I was intrigued by the unique concept of The Villages Health and the opportunity to take care of patients in a way that has never been done before."</h3><h4>Robert Reilly, MD, Medical Director of Creekside Care Center</h4>'
	);
 ?>
<div class="testimonial">
	<div class="tm-content">
		<?php echo $testimonial[array_rand($testimonial)]; ?>
	</div>
</div>