<?php
// Display Client Testimonial in full-width container above footer
// of several pages on the TVH site.
// 

$testimonial = Array(
		"<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3><h4>Bob Jones, The Villages</h4>",
		"<h3>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3><h4>Jane Doe, The Villages</h4>",
		"<h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h3><h4>Bill Smith, The Villages</h4>",
	);
 ?>
<div class="testimonial">
	<div class="tm-content">
		<?php echo $testimonial[array_rand($testimonial)]; ?>
	</div>
</div>