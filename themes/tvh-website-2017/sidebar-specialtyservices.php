<?php
/**
 * The sidebar containing specific services / specialty care page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location = get_field('carecenter') ? get_field('carecenter') : "" ;
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php if ( $location != "" ) : ?>
	<article id="widget-1" class="widget widget-location">
		<?php get_template_part( 'template-parts/side-location' ); ?>
	</article>
	<?php endif; ?>
	<article id="widget-2" class="widget widget-insurance">
		<?php get_template_part( 'template-parts/accepted-insurance' ); ?>
	</article>
	<article id="widget-3" class="widget widget-directory-dl">
		<?php get_template_part( 'template-parts/provider-download' ); ?>
	</article>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>