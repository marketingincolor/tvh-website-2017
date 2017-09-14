<?php
/*
Template Name: Front
*/
$vidlink = get_template_directory_uri() . '/assets/images/tvh-ws-btn-vid-launch.png';
$codelink = '[video_lightbox_youtube video_id="pKhpg_XfH-o&t&rel=0" width="640" height="480" anchor="'.$vidlink.'"]';
get_header(); ?>

<header class="front-hero">
<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="tagline">
<?php//echo do_shortcode($codelink); ?>
<a href="https://www.youtube.com/watch?v=5YbOsZiu6ZE&rel=0" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tvh-ws-btn-vid-launch.png" /></a>
</div>
</header>

<!-- <header class="front-hero-old" role="banner">
	<div class="fh-content">
		<div class="tagline">
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://www.youtube.com/watch?v=pKhpg_XfH-o&t" rel="wp-video-lightbox">video launch link</a>
		</div>
	</div>
</header> -->

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">
		<h1><?php the_title(); ?></h1>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_template_part( 'template-parts/cta-front' ); ?>

<?php get_template_part( 'template-parts/testimonial-main' ); ?>

<?php get_footer();
