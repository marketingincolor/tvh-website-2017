<?php
/**
 * The sidebar containing specific for patients page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
$dr_location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-location">
		<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
	</article>
	<article id="widget-2" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/provider-download' ); ?>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<div class="widget-title">
			Primary Care Services
		</div>
		<div class="widget-container">
			<p>Learn everything you need to know about becoming a primary care patient and its many convenient benefits.</p>
			<a href="<?php echo site_url(); ?>/services/primary-care"><button class="cta-button orange">Learn More</button></a>
		</div>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
