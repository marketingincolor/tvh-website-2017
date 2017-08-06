<?php
/**
 * The sidebar containing care center page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-location">
		<div class="widget-title">
			Sidebar Wiget Title
		</div>
		<div class="widget-container">
			<p>Add Shortcode to show ALL Locations</p>
		</div>
	</article>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>