<?php
/**
 * The sidebar containing specific why choose tvh page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$options = get_option('tvh_theme_options');
?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-location">
		<div class="widget-title">
			Become Our Patient
		</div>
		<div class="widget-container">
			<p>Ready to choose TVH? Simply click the button below to provide your information and become a patient.</p>
			<a href="<?php echo site_url(); ?>/for-patients/become-a-patient/"><button class="cta-button orange">New Patient Form</button></a>
		</div>
	</article>
	<article id="widget-2" class="widget widget-insurance">
		<div class="widget-title">
			Take A Care Center Tour
		</div>
		<div class="widget-container">
			<p>Stop by any Care Center or call to schedule your personal tour to see firsthand how exceptional health care can be.</p>
			<a href="<?php echo site_url(); ?>/care-centers"><button class="cta-button orange">Locations &amp; Phone Numbers</button></a>
		</div>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<div class="widget-title">
			Call Us to Learn More
		</div>
		<div class="widget-container">
			<p>Call <?php echo $options['tvh_pn_textbox']; ?> to learn more about becoming our patient.</p>
		</div>
	</article>
	<article id="widget-4" class="widget widget-dr-articles">
		<div class="widget-title">
			Specialty Care
		</div>
		<div class="widget-container">
			<p>You don't have to be our patient to see our specialists.</p>
			<a href="<?php echo site_url(); ?>/specialty-services/"><button class="cta-button orange">Learn More</button></a>
		</div>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
