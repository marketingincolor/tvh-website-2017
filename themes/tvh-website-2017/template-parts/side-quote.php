<?php
	// Custom Widget for Leadership Quote
	// 
	$location_id = get_the_id();
	$dr_location = 'Quote';
	$location_time = get_post_meta($location_id, 'location_time', true);
	$dr_quote = get_post_meta($location_id, 'quote', true);
	$dr_type = get_the_category();
?>

	<div class="staff-widget-title">
		<?php echo $dr_location; ?>
	</div>
	<div class="staff-widget-container">
		<h3 class="context"><em> &ldquo; <?php echo $dr_quote; ?> &rdquo; </em></h3>

	</div>

