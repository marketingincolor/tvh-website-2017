<?php
/**
 * The template for displaying single locations
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location_id = get_the_id();
$location_slug = get_post_field( 'post_name', $location_id );
$location_title = 'Welcome to ';
if ($location_slug == 'specialty-care-center') {
	$location_title = 'Welcome to our ';
}
$location_address = get_post_meta($location_id, '_location_address', true);
$location_town = get_post_meta($location_id, '_location_town', true);
$location_state = get_post_meta($location_id, '_location_state', true);
$location_zip = get_post_meta($location_id, '_location_postcode', true);
$location_country = get_post_meta($location_id, '_location_country', true);
$location_phone = get_post_meta($location_id, 'location_phone', true);
$location_time = get_post_meta($location_id, 'location_time', true);
$loc_event_id = get_post_meta($location_id, '_location_id', true);
$event_short = '[events_list_grouped location="'.$loc_event_id.'" mode="monthly" country="US"]#_EVENTLINK - #_EVENTDATES at #_EVENTTIMES<br />[/events_list_grouped]';
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php echo $location_title; ?><?php the_title(); ?></h1>
			<?php //foundationpress_entry_meta(); ?>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php //edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
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
			<div class="show-for-medium">
				<?php //echo do_shortcode($event_short) ; ?>
				<?php 
					$some_var = EM_Events::output(array('location'=>$loc_event_id));
					if ($some_var != 'No Events') { 
						echo '<h2>Upcoming Events</h2>';
						echo do_shortcode($event_short); 
					}
				?>
			</div>
		</footer>
		<?php //the_post_navigation(); ?>
			
		<?php get_template_part('template-parts/location-team'); ?>

		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php //comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('locations'); ?>
</div>
<?php get_footer();
