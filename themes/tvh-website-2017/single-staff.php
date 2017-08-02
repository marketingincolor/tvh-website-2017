<?php
/**
 * The template for the Staff Custom Post Type pages
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
$dr_specialty = get_field('specialty') ? get_field('specialty') : "" ;
$dr_location = get_field('location') ? get_field('location') : "" ;
$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
$dr_position = get_field('position') ? get_field('position') : "" ;
$dr_hometown = get_field('hometown') ? get_field('hometown') : "" ;
$dr_undergraduate = get_field('undergraduate') ? get_field('undergraduate') : "" ;
$dr_graduate = get_field('graduate') ? get_field('graduate') : "" ;
$dr_residency = get_field('residency') ? get_field('residency') : "" ;
$dr_certifications = get_field('certifications') ? get_field('certifications') : "" ;
$dr_fellowships = get_field('fellowships') ? get_field('fellowships') : "" ;
$dr_quote = get_field('quote') ? get_field('quote') : "" ;
get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header row columns">
			<div class="entry-image row collapse">
				<?php echo the_post_thumbnail('full'); ?>
				<div class="entry-caption small-12 columns">
					<h3><?php echo $dr_firstname . "&nbsp;". $dr_lastname; ?>, <?php echo $dr_credentials; ?> </h3>
					<h4><?php echo $dr_position; ?></h4>
				</div>
			</div>
		</header>

		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content row columns">
			<div class="entry-dr-meta">
			<?php if( get_field('specialty') ): ?>
			    <h5><?php the_field('specialty'); ?></h5>
			<?php endif; ?>
			<?php if( get_field('location') ): ?>
			    <h5><?php the_field('location'); ?></h5>
			<?php endif; ?>
			<?php if( get_field('hometown') ): ?>
			    <h5>Hometown: <span><?php echo $dr_hometown; ?></span></h5>
			<?php endif; ?>
			<?php if( get_field('undergraduate') ): ?>
			    <h5>Undergraduate: <span><?php echo $dr_undergraduate; ?></span></h5>
			<?php endif; ?>
			<?php if( get_field('graduate') ): ?>
			    <h5>Graduate School: <span><?php echo $dr_graduate; ?></span></h5>
			<?php endif; ?>
			<?php if( get_field('residency') ): ?>
			    <h5>Internship/Residency: <span><?php echo $dr_residency; ?></span></h5>
			<?php endif; ?>
			<?php if( get_field('certifications') ): ?>
			    <h5>Board Certified: <span><?php echo $dr_certifications; ?></span></h5>
			<?php endif; ?>
			<?php if( get_field('fellowships') ): ?>
			    <h5>Fellowships: <span><?php echo $dr_fellowships; ?></span></h5>
			<?php endif; ?>
			</div>

			<?php if( get_field('quote') ): ?>
			    <h5 class="staff-quote">"<?php echo $dr_quote; ?>"</h5>
			<?php endif; ?>

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
