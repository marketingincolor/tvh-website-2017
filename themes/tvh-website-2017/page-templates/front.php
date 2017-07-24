<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="fh-content">
		<div class="tagline">
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">video launch link</a>
		</div>
	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

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

	<div class="front-cta small-12 large-6 columns">
		<div class="choose small-10 small-centered" data-equalizer-watch="outer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-test-image.jpg" alt="semantic">
			<h3>Why choose TVH</h3>
			<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
			<button class="cta-button orange">Learn More</button>
		</div>
	</div>

	<div class="front-cta small-12 large-6 columns end">
		<div class="tour small-10 small-centered" data-equalizer-watch="outer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-test-image.jpg" alt="responsive">
			<h3>Take a virtual tour</h3>
			<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
			<button class="cta-button orange">Take a Tour</button>
		</div>
	</div>

</section>

<?php get_template_part( 'template-parts/main-testimonial' ); ?>

<?php get_footer();
