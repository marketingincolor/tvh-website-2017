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
	<article class="main-content"><h3 style="margin-bottom:2rem;">Find A Doctor Results</h3>
	<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	$search    = $_GET['s'];
	$specialty = $_GET['specialty'];
	$location  = $_GET['carecenter'];
	$gender  = $_GET['gender'];

	// For Debugging
	//echo 'String: ' . $search . '<br />';
	//echo 'Speciality: ' .$specialty . '<br />';
	//echo 'Location: ' . $location . '<br />';
	//echo 'Gender: ' . $gender . '<br />';
	//print_r($_GET);
	?>
	<?php


	$args = array(
		's' => $search,
		'category__not_in' => tvh_exclude_staff(),
		//'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
		'posts_per_page' => 10,
		'paged' => $paged,
		'post_type'  => 'staff',
		'meta_query' => array(
			'relation'    => 'AND',
			array(
				'key'     => 'specialty',
				'value'   => $specialty,
				'compare' => 'LIKE',
			),
			array(
				'key'     => 'carecenter',
				'value'   => $location,
				'compare' => 'LIKE',
			),
			array(
				'key'     => 'gender',
				'value'   => $gender,
				'compare' => '=',
			),
		),
	);

	$staff_search = new WP_Query($args);
	?>
	<?php if ( $staff_search->have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( $staff_search->have_posts() ) : $staff_search->the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
				<div class="entry-content">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
					<?php if( get_field('credentials') ): ?>
					    <span><?php the_field('credentials'); ?></span> -
					<?php endif; ?>
					<?php if( get_field('position') ): ?>
					    <span><?php the_field('position'); ?></span> -
					<?php endif; ?>
					<?php if( get_field('carecenter') ): ?>
					    <span><?php the_field('carecenter'); ?></span>
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

			<!-- REVISE TEMPLATE FOR NO STAFF FOUND -->
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>
		<?php wp_reset_query(); ?>

	    <?php
	        tvh_staff_pagination($staff_search->max_num_pages, 10,$paged);
	    ?>
	</article>
	<?php //get_sidebar(); ?>

</div>

<?php get_footer();
