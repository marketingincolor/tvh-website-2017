<?php
/**
 * The template for the Specialty Services Custom Post Type pages
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location = get_field('carecenter') ? get_field('carecenter') : "" ;

$thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
$thumbnail_url = $thumbnail_url[0];
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	<div class="specialty-subnav">
		<ul>
	    <?php $loop = new WP_Query( array( 'post_type' => 'specialty_services') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			    <?php the_title( '<a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark"><li>', '</li></a>' ); ?>
			<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		</ul>
	</div>

<?php while ( have_posts() ) : the_post(); ?>

		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content row columns">
			<div class="entry-dr-meta">

			<?php if( get_field('carecenter') ): ?>
			    <h5>Care Center: <span><?php echo $location; ?></span></h5>
			<?php endif; ?>

			</div>

			<?php the_content(); ?>

		</div>
		<footer>
			<?php
				/*wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);*/
			?>
			<p><?php //the_tags(); ?></p>
		</footer>
		<?php //the_post_navigation(); ?>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>

		<?php get_template_part( 'template-parts/specialty-team' ); ?>
		
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('specialtyservices'); ?>
</div>
<?php get_footer();
