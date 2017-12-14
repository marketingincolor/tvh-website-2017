<?php
// Custom Widget for Staff Location Pages
// 
//$staff_location = get_the_title();
$specialty_name = $post->post_name;
if ($specialty_name == 'general-surgery') {
	$specialty_name = 'General Surgery'; 
} elseif ($specialty_name == 'behavioral-health') {
	$specialty_name = 'Behavioral Health'; 
}
/*$doc_args = array(
	//'meta_key' => 'specialty',
	//'meta_value' => $staff_location,
	'category__not_in' => array( 4, 5, 6, 7, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'specialty',
			'value' => $staff_location,
			//'compare' => 'LIKE',
			'compare' => '=',
		),
		'last_clause' => array(
			'key' => 'last_name',
			'compare' => 'EXISTS'
		),
	),
	'orderby' => array(
		'last_clause' => 'ASC',
	),

);*/
$doc_args = array(
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'OR',
		array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'specialty',
				'value' => $specialty_name,
				'compare' => '=',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'compare' => 'EXISTS',
			),
		),
		array(
			'relation' => 'AND',
			'center_clause' => array(
				'key' => 'specialty',
				'value' => $specialty_name,
				'compare' => '=',
			),
			'pos_clause' => array(
				'key' => 'specialty_director',
				'value' => '1',
				'compare' => '=',
			),
		),
	),
	'orderby' => array(
		'last_clause' => 'ASC',
		'pos_clause' => 'DESC',
	),
);
$staff_args = array(
	'category__in' => array( 4, 5, 6, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'specialty',
			'value' => $specialty_name,
			'compare' => 'LIKE',
		),
		'last_clause' => array(
			'key' => 'last_name',
			'compare' => 'EXISTS',
		),
	),
	'orderby' => array(
		'last_clause' => 'ASC',
	),
);
$psr_args = array(
	'category__in' => array( 8 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'specialty',
			'value' => $specialty_name,
			'compare' => 'LIKE',
		),
		'last_clause' => array(
			'key' => 'last_name',
			'compare' => 'EXISTS',
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
		<div class="team-specialty small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><?php the_title(); ?>, <?php echo $dr_credentials; ?></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>

	<?php 
	$show_drs = new WP_Query( $staff_args );
	if($show_drs->have_posts()) :
		while ($show_drs->have_posts()) : $show_drs->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<div class="team-staff small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><?php the_title(); ?>, <?php echo $dr_credentials; ?></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>

	<?php 
	$show_drs = new WP_Query( $psr_args );
	if($show_drs->have_posts()) :
		while ($show_drs->have_posts()) : $show_drs->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<div class="team-psr small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><?php the_title(); ?>, <?php echo $dr_credentials; ?></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>

	</div>
</section>
<!--END DOCTOR TEMPLATE-->
<hr>
<?php $construction = array(
	'theme_location'  => '',
	'menu'            => strtolower($specialty_name),
	'container'       => 'section',
	'container_class' => '',
	'container_id'    => 'all-doctors',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
	'depth'           => 0,
	'walker'          => new Staff_Walker(),
);
wp_nav_menu( $construction );
?>
