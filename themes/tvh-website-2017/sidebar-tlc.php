<?php
/**
 * The sidebar containing specific testimonial and learning center widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$options = get_option('tvh_theme_options');
$testimonial = Array( 'eb', 'jr', 'lm', 'rw' );
?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-directory-dl">
		<a href="<?php echo site_url(); ?>/learning-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-dir-img-learn.jpg"></a>
	</article>
	<article id="widget-2" class="widget widget-directory-dl">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-side-img-<?php echo $testimonial[array_rand($testimonial)]; ?>-test.jpg">
	</article>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
