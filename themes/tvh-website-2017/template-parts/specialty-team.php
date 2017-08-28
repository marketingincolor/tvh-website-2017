 <?php
// Custom Widget for Staff Location Pages
// 
//$staff_location = get_the_title();
$staff_location = $post->post_name;
if ($staff_location == 'general-surgery') { $staff_location = 'General Surgery'; }
$doc_args = array(
	//'meta_key' => 'specialty',
	//'meta_value' => $staff_location,
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',

	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'specialty',
			'value' => $staff_location,
			'compare' => 'LIKE',
		),
		'last_clause' => array(
			'key' => 'last_name',
			'compare' => 'EXISTS'
		),
	),
	'orderby' => array(
		'last_clause' => 'ASC',
	),

);
?>

<!--DOCTOR TEMPLATE -->
<section id="all-doctors">
	<div class="row" data-equalizer data-equalize-by-row="true">
	<?php 
	$show_drs = new WP_Query( $doc_args );
	if($show_drs->have_posts()) :
		while ($show_drs->have_posts()) : $show_drs->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><?php the_title(); ?>, <?php echo $dr_credentials; ?></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<!--IF HAS BIO ADD HERE -->
				<!--END IF HAS BIO-->
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
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
<!--END DOCTOR TEMPLATE-->