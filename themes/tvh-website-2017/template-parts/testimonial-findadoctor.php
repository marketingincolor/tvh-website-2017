<?php
// Display Specific Client Testimonial in full-width container above footer
// of career pages on the TVH site.
// 

$testimonial = Array(
		'<h3>"When I see patients back and they\'re doing very well – it\'s the reason I went into orthopaedic surgery. Just the gratitude that you can see on their face. It\'s obviously what we went into medicine for, to really help patients, to truly make a difference in peoples\' lives."</h3><h4>David B. Ethier, MD, Orthopaedic Surgeon at The Villages Health Specialty Care Center</h4>'
	);
 ?>
<div class="testimonial">
	<div class="tm-content">
		<?php echo $testimonial[array_rand($testimonial)]; ?>
	</div>
</div>