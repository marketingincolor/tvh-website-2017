<?php
// Custom Widget for Hospital Staff Location Pages
// 
$args = array(
	'category_name' => 'hospitalist',
	'post_type' => 'staff'
);
?>

<!--HOSPITALIST TEMPLATE -->
<section id="hospitalist">
	<div class="row">
		<div class="meet-your-hospitalist-team small-12-columns">
		<h3>Meet the team.</h3>
		</div>
	</div>

	<div class="row" data-equalizer data-equalize-by-row="true">

	<?php 
	$hospitalist = new WP_Query( $args );
	if($hospitalist->have_posts()) :
		while ($hospitalist->have_posts()) : $hospitalist->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-3 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><?php the_title(); ?><?php if(get_field('credentials')) { echo ', '.$dr_credentials; }  ?></p>
				<p><em><?php echo $dr_position; ?></em></p>
			</div> 
		</div>
		<!-- end loop to display team -->
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>

	</div>
</section>
<!--END HOSPITALIST TEMPLATE-->