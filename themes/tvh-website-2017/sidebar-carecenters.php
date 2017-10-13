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
		$show_locations = new WP_Query( array(
			'post_name__in' => array(
				'belleview-care-center', 'colony-care-center', 'creekside-care-center', 'mulberry-grove-care-center', 'pinellas-care-center', 'santa-barbara-care-center', 'brownwood-care-center', 'specialty-care-center'),
			'post_type' => 'location', 
			'orderby' => 'name', 
			'order' => 'ASC'
			) );
		if($show_locations->have_posts()) :
			while ($show_locations->have_posts()) : $show_locations->the_post(); 
			$loc_id = get_the_id();
			$loc_slug = get_post_field( 'post_name', $loc_id );
			$loc_address = get_post_meta($loc_id, '_location_address', true);
			$loc_town = get_post_meta($loc_id, '_location_town', true);
			$loc_state = get_post_meta($loc_id, '_location_state', true);
			$loc_zip = get_post_meta($loc_id, '_location_postcode', true);
			$loc_phone = get_post_meta($loc_id, 'location_phone', true);
			$loc_fax = get_post_meta($loc_id, 'location_fax', true);
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
					<p><?php echo $loc_address; ?><br>
					<?php echo $loc_town; ?>, <?php echo $loc_state; ?> <?php echo $loc_zip; ?></p>
					<p><?php echo $loc_phone; ?></p>
					<?php if (is_page('contact')) { ?>
					<p><?php echo ( $loc_fax != '' ? 'Fax: ' . $loc_fax  : '' ); ?></p>
					<?php } ?>
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