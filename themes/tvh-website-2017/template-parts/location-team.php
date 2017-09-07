<?php
// Custom Widget for Staff Location Pages
// 
//$staff_location = get_field('location') ? get_field('location') : "" ;
//$staff_location = get_the_title();
$page_location = $post->post_name;
switch ($page_location) {
	case 'belleview-care-center' :
	$staff_location = 'Belleview Care Center';
	break;
	case 'colony-care-center' :
	$staff_location = 'Colony Care Center';
	break;
	case 'creekside-care-center' :
	$staff_location = 'Creekside Care Center';
	break;
	case 'mulberry-grove-care-center' :
	$staff_location = 'Mulberry Grove Care Center';
	break;
	case 'pinellas-care-center' :
	$staff_location = 'Pinellas Care Center';
	break;
	case 'santa-barbara-care-center' :
	$staff_location = 'Santa Barbara Care Center';
	break;
	case 'brownwood-care-center' :
	$staff_location = 'Brownwood Care Center';
	break;
	case 'specialty-care-center' :
	$staff_location = 'Specialty Care Center';
	break;
	case 'acute-care-clinic' :
	$staff_location = 'Saturday Acute Care Clinic';
	break;
}

$spdoc_args = array(
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'specialty',
	'meta_value' => array( 'audiology', 'dermatology', 'neurology', 'psychiatry' ),
	'meta_compare' => 'NOT IN',
	'meta_query' => array(
		'relation' => 'OR',
		array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'carecenter',
				'value' => $staff_location,
				'compare' => 'LIKE',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'compare' => 'EXISTS'
			),
		),
		array(
			'relation' => 'AND',
			'center_clause' => array(
				'key' => 'carecenter',
				'value' => $staff_location,
				'compare' => 'LIKE',
			),
			'pos_clause' => array(
				'key' => 'position',
				'value' => 'Medical Director',
				'compare' => '=',
			),
		),
	),
	'orderby' => array(
		'pos_clause' => 'DESC',
		'specialty' => 'ASC',
		'last_clause' => 'ASC',
	),
);
$doc_args = array(
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'OR',
		array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'carecenter',
				'value' => $staff_location,
				'compare' => 'LIKE',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'compare' => 'EXISTS'
			),
		),
		array(
			'relation' => 'AND',
			'center_clause' => array(
				'key' => 'carecenter',
				'value' => $staff_location,
				'compare' => 'LIKE',
			),
			'pos_clause' => array(
				'key' => 'position',
				'value' => 'Medical Director',
				'compare' => '=',
			),
		),
	),
	'orderby' => array(
		'pos_clause' => 'DESC',
		'last_clause' => 'ASC',
	),
);
$staff_args = array(
	'category__in' => array( 6, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'carecenter',
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
$psr_args = array(
	'category__in' => array( 8 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'carecenter',
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
<?php if ($staff_location != 'Saturday Acute Care Clinic') : ?>
<!--DOCTOR TEMPLATE -->
<section id="all-doctors">
	<div class="row">
		<div class="meet-your-care-team small-12 columns">
		<h2>Meet Your Care Team</h2>
		</div>
	</div>

	<div class="row" data-equalizer data-equalize-by-row="true">

	<?php 
	if ($staff_location == 'Specialty Care Center' ) {
		$show_args = $spdoc_args;
	} else {
		$show_args = $doc_args;
	}
	$show_drs = new WP_Query( $show_args );
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
				<p><strong><?php the_title(); ?>, <?php echo $dr_credentials; ?></strong></p>
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

	<?php 
	$show_staff = new WP_Query( $staff_args );
	if($show_staff->have_posts()) :
		while ($show_staff->have_posts()) : $show_staff->the_post(); 
		$staff_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$staff_position = get_field('position') ? get_field('position') : "" ;
		$staff_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $staff_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p>
					<strong><?php the_title(); ?>
					<?php if(get_field('credentials')) { echo ', '.$staff_credentials; } ?></strong>
				</p>
				<p><em><?php echo $staff_position; ?></em></p>
				<!--IF HAS BIO ADD HERE -->
				<p><?php //the_content(); ?></p>
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

	<?php 
	$show_psr = new WP_Query( $psr_args );
	if($show_psr->have_posts()) :
		while ($show_psr->have_posts()) : $show_psr->the_post(); 
		$psr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$psr_position = get_field('position') ? get_field('position') : "" ;
		$psr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $psr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p>
					<strong><?php the_title(); ?>
					<?php if(get_field('credentials')) { echo ', '.$psr_credentials; } ?></strong>
				</p>
				<p><em><?php echo $psr_position; ?></em></p>
				<!--IF HAS BIO ADD HERE -->
				<p><?php the_content(); ?></p>
				<!--END IF HAS BIO-->
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
<?php endif; ?>
