<?php
/**
 * The sidebar containing specific services / specialty care page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$sp_location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="staff-widget-1" class="widget widget-dr-home">
		<?php get_template_part( 'template-parts/staff-location' ); ?>
	</article>
	<article id="staff-widget-2" class="widget widget-insurance">
		<?php get_template_part( 'template-parts/staff-insurance' ); ?>
	</article>
	<article id="staff-widget-3" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/staff-download' ); ?>
	</article>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>