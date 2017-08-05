<?php
/**
 * The sidebar containing specific why choose tvh page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-dr-home">
		<div class="widget-title">
			Become Our Patient
		</div>
		<div class="widget-container">
			<p>Ready to choose TVH? Simply click the button below to provide your information and become a patient.</p>
			<button class="cta-button orange">New Patient Form</button>
		</div>
	</article>
	<article id="widget-2" class="widget widget-insurance">
		<div class="widget-title">
			Take A Care Center Tour
		</div>
		<div class="widget-container">
			<p>Call XXX-XXX-XXXX to schedule your personal tour and see firsthand how exceptional healthcare works.</p>
		</div>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<div class="widget-title">
			Contact Us
		</div>
		<div class="widget-container">
			<p>Call XXX-XXX-XXXX to learn more about becoming our patient.</p>
		</div>
	</article>
	<article id="widget-4" class="widget widget-dr-articles">
		<div class="widget-title">
			Seeing a Specialist
		</div>
		<div class="widget-container">
			<p>You don't have to be our patient to see our specialists.</p>
			<button class="cta-button orange">Learn More</button>
		</div>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
