<?php
/**
 * The sidebar containing specific testimonial and learning center widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$options = get_option('tvh_theme_options');
?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-directory-dl">
		<a href="<?php echo site_url(); ?>/learning-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-dir-img-learn.jpg"></a>
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
