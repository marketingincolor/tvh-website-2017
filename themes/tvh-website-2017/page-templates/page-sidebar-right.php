<?php
/*
Template Name: Right Sidebar
*/
get_header(); ?>

<?php if (is_page('care-centers')) : ?>
<header class="front-hero">
	<?php get_template_part( 'template-parts/featured-image' ); ?>
	<div class="tagline">
	<a href="https://my.matterport.com/show/?m=woxE3zsTMnD?iframe=true" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tvh-ws-btn-vid-launch.png" /></a>
	</div>
</header>
<?php else : ?>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php endif; ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
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

		<?php if (is_page('specialty-services')) : ?>
			<?php get_template_part( 'template-parts/services-grid' ); ?>
		<?php endif; ?>

		<?php if ( is_page('news')): ?>
			<?php get_template_part( 'template-parts/newsfeed' ); ?>
		<?php endif; ?>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar(); ?>

</div>

<?php if ( is_page('care-centers')): ?>
	<?php get_template_part( 'template-parts/testimonial-main' ); ?>
<?php elseif ( is_page('for-patients')): ?>
	<?php get_template_part( 'template-parts/testimonial-main' ); ?>
<?php endif; ?>


<?php get_footer();
