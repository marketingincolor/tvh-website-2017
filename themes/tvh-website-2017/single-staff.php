<?php
/**
 * The template for the Staff Custom Post Type pages
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	<?php echo the_post_thumbnail(); ?>

<?php if( get_field('first_name') ): ?>
    <h5><?php the_field('first_name'); ?></h5>
<?php endif; ?>
<?php if( get_field('last_name') ): ?>
    <h5><?php the_field('last_name'); ?></h5>
<?php endif; ?>
<?php if( get_field('location') ): ?>
    <h5><?php the_field('location'); ?></h5>
<?php endif; ?>
<?php if( get_field('credentials') ): ?>
    <h5><?php the_field('credentials'); ?></h5>
<?php endif; ?>
<?php if( get_field('position') ): ?>
    <h5><?php the_field('position'); ?></h5>
<?php endif; ?>
<?php if( get_field('hometown') ): ?>
    <h5><?php the_field('hometown'); ?></h5>
<?php endif; ?>
<?php if( get_field('undergraduate') ): ?>
    <h5><?php the_field('undergraduate'); ?></h5>
<?php endif; ?>
<?php if( get_field('graduate') ): ?>
    <h5><?php the_field('graduate'); ?></h5>
<?php endif; ?>
<?php if( get_field('residency') ): ?>
    <h5><?php the_field('residency'); ?></h5>
<?php endif; ?>
<?php if( get_field('certifications') ): ?>
    <h5><?php the_field('certifications'); ?></h5>
<?php endif; ?>
<?php if( get_field('fellowshipssub_heading') ): ?>
    <h5><?php the_field('fellowshipssub_heading'); ?></h5>
<?php endif; ?>
<?php if( get_field('quote') ): ?>
    <h5><?php the_field('quote'); ?></h5>
<?php endif; ?>


		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php //foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
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
		<?php the_post_navigation(); ?>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('staff'); ?>
</div>
<?php get_footer();
