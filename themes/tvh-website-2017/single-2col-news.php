<?php
/**
Template Name: 2 Column News
Template Post Type: post, page
 * The template for displaying 2 column posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$side_content = get_field('column_content') ? get_field('column_content') : "" ;
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php //foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content zzzsmall-12 zzzmedium-6 zzzcolumns">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

		<!--<div class=" zzzsmall-12 zzzmedium-6 zzzcolumns">
			<?php //echo get_field('column_content'); ?>
		</div>-->

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
		<?php $args = array(
			'prev_text' => 'Previous',
			'next_text' => 'Next'
		);
		the_post_navigation($args); ?>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php //comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<aside class="sidebar">
	<article id="widget-1" class="widget widget-directory-dl" style="background-color:transparent !important; padding:0 1em;">
		<?php echo get_field('column_content'); ?>
	</article>
</aside>
<?php //get_sidebar(); ?>
</div>

<?php if ( is_single('evergreen-wellness') ) : ?>
	<?php get_template_part('template-parts/egw-popup'); ?>
<?php endif; ?>

<?php get_footer();
