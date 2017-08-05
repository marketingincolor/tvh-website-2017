<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<?php if ( is_page('specialty-services') ) : ?>
	<?php get_template_part( 'sidebar-specialtyservices' ); ?>
<?php elseif ( is_page('why-choose-tvh') ) : ?>
	<?php get_template_part( 'sidebar-whychoose' ); ?>
<?php elseif ( is_page('news') ) : ?>
	<?php get_template_part( 'sidebar-news' ); ?>
<?php elseif ( is_page('for-patients') ) : ?>
	<?php get_template_part( 'sidebar-forpatients' ); ?>
<?php else : ?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
<?php endif; ?>
