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
<a href="https://www.youtube.com/watch?v=pKhpg_XfH-o&t&rel=0" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tvh-ws-btn-vid-launch.png" /></a>
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

<section class="cta-container row columns small-11 medium-8 small-centered" data-equalizer="outer">
<div data-equalizer="inner" class="collapse">
	<div class="front-cta small-12 large-6 columns">
		<div class="choose small-10 small-centered" data-equalizer-watch="outer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-front-img-choose.jpg" alt="semantic">
			<h3>Why choose TVH</h3>
			<p data-equalizer-watch="inner">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut ad minim.</p>
			<p><a href="about/"><button class="cta-button orange">Learn More</button></a></p>
		</div>
	</div>

	<div class="front-cta small-12 large-6 columns end">
		<div class="tour small-10 small-centered" data-equalizer-watch="outer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-front-img-tour.jpg" alt="responsive">
			<h3>Take a virtual tour</h3>
			<p data-equalizer-watch="inner">Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
			<p><a href="about/"><button class="cta-button orange">Take a Tour</button></a></p>
		</div>
	</div>
</div>
</section>

<?php get_template_part( 'template-parts/main-testimonial' ); ?>

<?php get_footer();
