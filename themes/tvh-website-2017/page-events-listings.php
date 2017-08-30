<?php
/**
 * The template for displaying Events Listing pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$event_type = $_POST['event-type'];
$event_type_disp = ucwords($event_type);
$event_loc = $_POST['event-location'];
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

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

			<?php //$event_type = $_POST['event-type']; ?>
			<?php //$event_loc = $_POST['event-location']; ?>

			<?php if ( !empty($event_type) ) : ?>

			<h2><?php echo $event_type_disp; ?></h2>
			<?php echo EM_Events::output(array('limit'=>10, 'pagination'=>1, 'category'=>$event_type, 'location'=>$event_loc)); ?>

			<?php else : ?>

				<h4>Classes</h4>
				<?php echo EM_Events::output(array('limit'=>10, 'pagination'=>1, 'category'=>'classes')); ?>
				<hr>
				<h4>Boot Camps</h4>
				<?php echo EM_Events::output(array('limit'=>10, 'pagination'=>1, 'category'=>'boot-camps')); ?>
				<hr>
				<h4>Screenings</h4>
				<?php echo EM_Events::output(array('limit'=>10, 'pagination'=>1, 'category'=>'screenings')); ?>

			<?php endif; ?>

		</div>
	</article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php //get_sidebar(); ?>



<?php if ( is_page('find-a-doctor') ) : ?>

<?php elseif ( is_page('hospital-care') ) : ?>

<?php elseif ( is_page('leadership') ) : ?>

<?php endif; ?>

 </div>

<?php get_template_part( 'template-parts/testimonial-main' ); ?>

 <?php get_footer();
