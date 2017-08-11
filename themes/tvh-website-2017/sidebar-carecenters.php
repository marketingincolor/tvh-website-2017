<?php
/**
 * The sidebar containing care center page widgets
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<aside class="sidebar sidebar-staff">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<article id="widget-1" class="widget widget-location">
		<div class="widget-title">
			Care Centers
		</div>
		<div class="widget-container">
		<?php 
		$show_locations = new WP_Query( array('post_type' => 'location') );
		if($show_locations->have_posts()) :
			while ($show_locations->have_posts()) : $show_locations->the_post(); 
			$loc_id = get_the_id();
			$loc_slug = get_post_field( 'post_name', $loc_id );
			$loc_address = get_post_meta($loc_id, '_location_address', true);
			$loc_town = get_post_meta($loc_id, '_location_town', true);
			$loc_state = get_post_meta($loc_id, '_location_state', true);
			$loc_zip = get_post_meta($loc_id, '_location_postcode', true);
			$loc_phone = get_post_meta($loc_id, 'location_phone', true);
			$loc_time = get_post_meta($loc_id, 'location_time', true);
			?>
			<div class="list-cc">
				<div id="individual-center" class="text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-<?php echo $loc_slug; ?>-thumb.png">
					<p><strong><?php the_title(); ?></strong></p>
					<p><?php echo $loc_address; ?><br><?php echo $loc_town; ?>, <?php echo $loc_state; ?>, <?php echo $loc_zip; ?></p>
					<p><?php echo $loc_phone; ?></p>
					<p><?php echo $loc_time; ?></p>
				</div> 
			</div>
		<?php 
			endwhile; 
		endif;
		wp_reset_postdata();
		?>
			<p>&nbsp;</p>
		</div>
	</article>

	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>