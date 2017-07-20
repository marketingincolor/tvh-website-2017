<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Download FoundationPress</a>
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
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<section class="cta-container">

	<div class="front-cta choose">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-test-image.jpg" alt="semantic">
		<h3>Why choose TVH</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
		<button class="cta-button orange">Learn More</button>
	</div>

	<div class="front-cta tour">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-test-image.jpg" alt="responsive">
		<h3>Take a virtual tour</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
		<button class="cta-button orange">Take a Tour</button>
	</div>

</section>

<!-- TODO: change to FUNCTION or PLUGIN call to display testimonial conditionally -->
<div class="testimonial">
	<h2>INSERT TESTIMONIAL HERE</h2>
</div>

<?php get_footer();
