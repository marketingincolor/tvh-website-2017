<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
//$location = _POST['location'];
get_header(); ?>

<div class="main-wrap" role="main">
	<article class="main-content"><h3>Find A Doctor Results</h3>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
				<div class="entry-content">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
					<?php if( get_field('credentials') ): ?>
					    <span><?php the_field('credentials'); ?></span> -
					<?php endif; ?>
					<?php if( get_field('position') ): ?>
					    <span><?php the_field('position'); ?></span> -
					<?php endif; ?>
					<?php if( get_field('location') ): ?>
					    <span><?php the_field('location'); ?></span>
					<?php endif; ?>
					</a>
				</div>
				<footer>
					<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
				</footer>
				<hr />
			</div>
		<?php endwhile; ?>

		<?php else : ?>
			<?php //get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Previous', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Next &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>
	<?php //get_sidebar(); ?>

</div>

<?php get_footer();
