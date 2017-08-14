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
		$show_locations = new WP_Query( array('post_type' => 'location', 'orderby' => 'name', 'order' => 'ASC') );
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

			switch ($loc_slug) {
				case 'belleview-care-center' :
				$loc_title = 'Belleview Care Center';
				break;
				case 'colony-care-center' :
				$loc_title = 'Colony Care Center';
				break;
				case 'creekside-care-center' :
				$loc_title = 'Creekside Care Center';
				break;
				case 'mulberry-grove-care-center' :
				$loc_title = 'Mulberry Grove Care Center';
				break;
				case 'pinellas-care-center' :
				$loc_title = 'Pinellas Care Center';
				break;
				case 'santa-barbara-care-center' :
				$loc_title = 'Santa Barbara Care Center';
				break;
				case 'brownwood-care-center' :
				$loc_title = 'Brownwood Care Center';
				break;
				case 'specialty-care-center' :
				$loc_title = 'Specialty Care Center';
				break;
				case 'acute-care-clinic' :
				$loc_title = 'Saturday Acute Care Clinic';
				break;
			}

			?>
			<div class="list-cc">
				<div id="individual-center" class="text-center">
					<a href="<?php echo site_url() . '/' . $loc_slug; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-<?php echo $loc_slug; ?>-thumb.png"></a>
					<p><strong><a href="<?php echo site_url() . '/' . $loc_slug; ?>"><?php echo $loc_title; ?></a></strong></p>
					<p><?php echo $loc_phone; ?></p>

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