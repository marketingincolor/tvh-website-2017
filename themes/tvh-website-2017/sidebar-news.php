<?php
/**
 * The sidebar containing specific about page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
$dr_location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-location">
		<div class="widget-title">
			Sidebar Wiget Title
		</div>
		<div class="widget-container">
			<p>Sidebar Widget Message</p>
			<button class="cta-button orange">Link</button>
		</div>
	</article>
	<article id="widget-2" class="widget widget-insurance">
		<div class="widget-title">
			Sidebar Wiget Title
		</div>
		<div class="widget-container">
			<p>Sidebar Widget Message</p>
		</div>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<div class="widget-title">
			Sidebar Wiget Title
		</div>
		<div class="widget-container">
			<p>Sidebar Widget Message</p>
		</div>
	</article>
	<article id="widget-4" class="widget widget-dr-articles">
		<div class="widget-title">
			Sidebar Wiget Title
		</div>
		<div class="widget-container">
			<p>Sidebar Widget Message</p>
			<button class="cta-button orange">Learn More</button>
		</div>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
