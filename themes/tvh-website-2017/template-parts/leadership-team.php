<?php
// Custom Widget for Staff Location Pages
// 
$args = array(
	'category_name' => 'leadership',
	'posts_per_page' => -1,
	'post_type' => 'staff'
);
?>

<!--LEADERSHIP TEMPLATE -->
<section id="leadership">
	<div class="row">
		<div class="meet-your-leadership-team small-12 columns">
		<h2>Meet the visionary leaders behind healthier health care.</h2>
		</div>
	</div>

	<div class="row" data-equalizer data-equalize-by-row="true">

	<?php 
	$leadership = new WP_Query( $args );
	if($leadership->have_posts()) :
		while ($leadership->have_posts()) : $leadership->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-3 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?><?php if(get_field('credentials')) { echo ', '.$dr_credentials; } ?></strong></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<!--IF HAS BIO ADD HERE -->
				<!--END IF HAS BIO-->
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Read Bio"><button class="cta-button-front orange">Read Bio</button></a></p>
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
<!--END LEADERSHIP TEMPLATE-->