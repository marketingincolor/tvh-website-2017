<?php
/**
 * The sidebar containing specific staff widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
$dr_location = get_field('location') ? get_field('location') : "" ;
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
	<article id="staff-widget-4" class="widget widget-dr-articles">
		<?php get_template_part( 'template-parts/staff-articles' ); ?>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
