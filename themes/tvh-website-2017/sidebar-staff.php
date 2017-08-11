<?php
/**
 * The sidebar containing specific staff page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
$dr_location = get_field('carecenter') ? get_field('carecenter') : "" ;
$dr_specialty = get_field('specialty') ? get_field('specialty') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
<?php if ($dr_specialty == 'Psychiatry') : ?>
	<article id="widget-0" class="widget widget-location">
		<?php get_template_part( 'template-parts/side-psych' ); ?>
	</article>
<?php else : ?>

	<?php if ( is_single('elliot-j-sussman') || is_single('thomas-menichino') || is_single('jeffrey-lowenkron') || is_single('robert-warden') ) :  else : ?>
		<article id="widget-1" class="widget widget-location">
			<?php get_template_part( 'template-parts/side-location' ); ?>
		</article>
	<?php endif; ?>

	<article id="widget-2" class="widget widget-insurance">
		<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
	</article>	
<?php endif; ?>
	<article id="widget-3" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/provider-download' ); ?>
	</article>
	<!-- <article id="widget-4" class="widget widget-dr-articles">
		<?php //get_template_part( 'template-parts/staff-articles' ); ?>
	</article> -->
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
