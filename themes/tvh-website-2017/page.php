<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<?php if (is_page('about')) : ?>
<header class="front-hero">
	<?php get_template_part( 'template-parts/featured-image' ); ?>
	<div class="tagline">
	<a href="https://www.youtube.com/watch?v=5YbOsZiu6ZE&rel=0" rel="wp-video-lightbox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tvh-ws-btn-vid-launch.png" /></a>
	</div>
</header>
<?php else : ?>
	<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php endif; ?>

 <div class="main-wrap" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
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
	</article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php //get_sidebar(); ?>

<?php if ( is_page('find-a-doctor') ) : ?>
	<?php get_template_part( 'template-parts/find-a-doctor' ); ?>
<?php elseif ( is_page('hospital-care') ) : ?>
	<?php get_template_part( 'template-parts/hospital-team' ); ?>
<?php elseif ( is_page('leadership') ) : ?>
	<?php get_template_part( 'template-parts/leadership-team' ); ?>
<?php endif; ?>

 </div>

<?php if ( is_page('services') ) : ?>
	<?php get_template_part( 'template-parts/cta-services' ); ?>
<?php elseif ( is_page('about') ) : ?>
	<?php get_template_part( 'template-parts/cta-about' ); ?>
<?php elseif ( is_page('careers') ) : ?>
	<?php get_template_part( 'template-parts/cta-careers' ); ?>
<?php elseif ( is_page('primary-care') ) : ?>
	<?php get_template_part( 'template-parts/cta-primarycare' ); ?>
<?php endif; ?>

<?php if ( is_page('careers') ) : ?>
	<?php get_template_part( 'template-parts/testimonial-career' ); ?>
<?php elseif ( is_page('find-a-doctor') ) : ?>
	<?php get_template_part( 'template-parts/testimonial-findadoctor' ); ?>
<?php elseif ( is_page('accepted-insurance') ) : ?>
<?php else : ?>
	<?php get_template_part( 'template-parts/testimonial-main' ); ?>
<?php endif; ?>

 <?php get_footer();
