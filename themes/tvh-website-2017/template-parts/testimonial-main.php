<?php
// Display Client Testimonial in full-width container above footer
// of several pages on the TVH site.
// 
$args = array(
	'post_type' => 'testimonial',
	'category_name' => 'patient-testimonial',
	'orderby' => 'rand',
	'posts_per_page' => '1',
);
?>
<div class="testimonial">
	<div class="tm-content">
		<?php //echo $testimonial[array_rand($testimonial)]; ?>

		<?php 
		$quote = new WP_Query( $args );
		if($quote->have_posts()) :
			while ($quote->have_posts()) : $quote->the_post(); ?>
			<!-- Loop to display testimonial -->
			<h3><?php echo get_the_content(); ?></h3>
			<h4><?php echo get_the_title(); ?>, <?php echo get_the_excerpt(); ?></h4>
			<!-- end loop to display testimonial -->
		<?php 
			endwhile; 
		endif;
		wp_reset_postdata();
		?>
	</div>
</div>