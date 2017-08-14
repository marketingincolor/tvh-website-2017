<?php
/**
 * The sidebar containing specific recruitment page widgets
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
			Contact Us
		</div>
		<div class="widget-container">
		<?php if ( is_page('doctor-recruitment') ) : ?>
			<p>Click the button below to provide us with some information about your interest in joining our team of doctors.</p>
			<a href="<?php echo site_url(); ?>/careers/doctors"><button class="cta-button orange">Apply</button></a>
		<?php elseif ( is_page('general-recruitment') ) : ?>
			<p>Click the button below to provide us with some information about your interest in a career at The Villages Health</p>
			<a href="<?php echo site_url(); ?>/careers/general-staff-form"><button class="cta-button orange">Apply</button></a>
		<?php endif; ?>
		</div>
	</article>
	<article id="widget-2" class="widget widget-directory-dl">
		<a href="<?php echo site_url(); ?>/inventing-a-new-paradigm-for-care/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-dir-img-paradigm.jpg"></a>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
