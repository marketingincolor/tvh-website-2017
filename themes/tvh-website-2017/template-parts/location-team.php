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

$splist_args = array(
	'category__in' => array( 31 ),
	'category__not_in' => array( 4, 5, 6 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'specialty',
	'meta_value' => array( 'psychiatry' ),
	'meta_compare' => 'NOT IN',
	'meta_query' => array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'carecenter',
				'value' => 'Center',
				'compare' => 'LIKE',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'compare' => 'EXISTS',
			),
		),

	'orderby' => array(
		'specialty' => 'ASC',
		'last_clause' => 'ASC',
	),
);

$dir_args = array(
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'specialty',
	'meta_value' => array( 'audiology', 'dermatology', 'neurology', 'psychiatry' ),
	'meta_compare' => 'NOT IN',
	'meta_query' => array(
		'relation' => 'AND',
		'center_clause' => array(
			'key' => 'carecenter',
			'value' => 'Specialty Care Center',
			'compare' => 'LIKE',
		),
		'pos_clause' => array(
			'key' => 'position',
			'value' => 'Medical Director',
			'compare' => '=',
		),
	),
);

$spdoc_args = array(
	'category__not_in' => array( 4, 5, 6, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'specialty',
	'meta_value' => array( 'audiology', 'dermatology', 'neurology', 'psychiatry' ),
	'meta_compare' => 'NOT IN',
	'meta_query' => array(
		'relation' => 'AND',
		array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'carecenter',
				'value' => 'Specialty Care Center',
				'compare' => 'LIKE',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'compare' => 'EXISTS',
			),
		),
		array(
			'relation' => 'AND',
			'center_clause' => array(
				'key' => 'carecenter',
				'value' => 'Specialty Care Center',
				'compare' => 'LIKE',
			),
			'pos_clause' => array(
				'key' => 'position',
				'value' => 'Medical Director',
				'compare' => '!=',
			),
		),
	),
	'orderby' => array(
		//'pos_clause' => 'ASC',
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
				'compare' => 'EXISTS',
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

$bstaff_args = array(
	'category_name' => 'nurse',
	'category__in' => array( 31 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'key' => 'last_name',
		'compare' => 'EXISTS',
	),
	'orderby' => 'last_name',
	'order' => 'ASC',
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
			'key' => 'carecenter',
			'value' => $staff_location,
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
$pncc_args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'last_name',
	'meta_value' => array( 'Turri', 'Zaka' ),
	'meta_compare' => 'IN',
	'orderby' => array( 'last_name' => 'ASC', ),
);
$cocc_args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'last_name',
	'meta_value' => array( 'Turri', 'Bradley-Pratesi' ),
	'meta_compare' => 'IN',
	'orderby' => array( 'last_name' => 'ASC', ),
);
$crcc_args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'last_name',
	'meta_value' => array( 'Turri', 'Montero' ),
	'meta_compare' => 'IN',
	'orderby' => array( 'last_name' => 'ASC', ),
);
$sbcc_args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'last_name',
	'meta_value' => array( 'Waldo' ),
	'meta_compare' => 'IN',
	'orderby' => array( 'last_name' => 'ASC', ),
);
$mgcc_args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_key' => 'last_name',
	'meta_value' => array( 'Zaka' ),
	'meta_compare' => 'IN',
	'orderby' => array( 'last_name' => 'ASC', ),
);
$bwcc_args = array(
	'category__not_in' => array( 4, 5, 8, 9, 10 ),
	'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'OR',
		array(
			'relation' => 'AND',
			'first_clause' => array(
				'key' => 'first_name',
				'value' => array( 'David', 'Robert' ),
				'compare' => 'IN',
			),
			'last_clause' => array(
				'key' => 'last_name',
				'value' => array( 'Kelley', 'Raquet' ),
				'compare' => 'IN',
			),
		),
		array(
			'relation' => 'AND',
			'all_clause' => array(
				'key' => 'carecenter',
				'value' => $staff_location,
				'compare' => 'LIKE',
			),
			'exist_clause' => array(
				//'key' => 'last_name',
				//'compare' => 'EXISTS',
				'key' => 'position',
				'value' => 'Nurse Practitioner',
				'compare' => 'LIKE'
			),
		),
	),
	'orderby' => array(
		'exist_clause' => 'ASC',
		'last_clause' => 'ASC',
	),

	/*'post_type' => 'staff',
	'posts_per_page' => -1,
	'meta_query' => array(
		'relation' => 'AND',
		'all_clause' => array(
			'key' => 'first_name',
			'value' => array( 'David', 'Robert', 'Nancy' ),
			'compare' => 'IN',
		),
		'last_clause' => array(
			'key' => 'last_name',
			'value' => array( 'Kelley', 'Raquet', 'Johnson' ),
			'compare' => 'IN',
		),
	),
	'orderby' => array(
		'last_clause' => 'ASC',
	),*/
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
	<?php if ($staff_location == 'Brownwood Care Center' ) : ?>
		<h3 class="small-11 small-offset-1">Primary Care</h3>
	<?php endif; ?>

	<?php if ($staff_location == 'Specialty Care Center' ) : ?>
	<?php 
	$show_dir = new WP_Query( $dir_args );
	if($show_dir->have_posts()) :
		while ($show_dir->have_posts()) : $show_dir->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<div class="team-main director small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?>, <?php echo $dr_credentials; ?></strong></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>
	<?php endif; ?>

	<?php 
	if ($staff_location == 'Specialty Care Center' ) {
		$show_args = $spdoc_args;
	} elseif ($staff_location == 'Brownwood Care Center' ) {
		$show_args = $bwcc_args;
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
		<div class="team-main small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?>, <?php echo $dr_credentials; ?></strong></p>
				<p><em><?php echo $dr_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>
	<?php if ($staff_location == 'Brownwood Care Center' ) : ?>
		<h3 class="small-11 small-offset-1">Specialty Care</h3>
	<?php endif; ?>
	<?php 
	if ($staff_location == 'Pinellas Care Center' ) {
		$custom_args = $pncc_args;
	} elseif ($staff_location == 'Colony Care Center' ) {
		$custom_args = $cocc_args;
	} elseif ($staff_location == 'Creekside Care Center' ) {
		$custom_args = $crcc_args;
	} elseif ($staff_location == 'Santa Barbara Care Center' ) {
		$custom_args = $sbcc_args;
	} elseif ($staff_location == 'Mulberry Grove Care Center' ) {
		$custom_args = $mgcc_args;
	} elseif ($staff_location == 'Brownwood Care Center' ) {
		$custom_args = $splist_args;
	}
	$show_custom = new WP_Query( $custom_args );
	if($show_custom->have_posts()) :
		while ($show_custom->have_posts()) : $show_custom->the_post(); 
		$custom_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		if (($staff_location == 'Brownwood Care Center') && (get_field('position') != 'Dietitian')) { 
			$custom_position = get_field('specialty') ? get_field('specialty') : "" ;
		} else {
			$custom_position = get_field('position') ? get_field('position') : "" ;
		}
		$custom_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<div class="team-custom small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $custom_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?>, <?php echo $custom_credentials; ?></strong></p>
				<p><em><?php echo $custom_position; ?></em></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
	<?php 
		endwhile; 
	endif;
	wp_reset_postdata();
	?>

	<?php 
	if ($staff_location == 'Brownwood Care Center' ) {
		$staffcustom_args = $bstaff_args;
	} else {
		$staffcustom_args = $staff_args;
	}
	$show_staff = new WP_Query( $staffcustom_args );
	if($show_staff->have_posts()) :
		while ($show_staff->have_posts()) : $show_staff->the_post(); 
		$staff_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$staff_position = get_field('position') ? get_field('position') : "" ;
		$staff_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<div class="team-staff small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $staff_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?><?php if(get_field('credentials')) { echo ', '.$staff_credentials; } ?></strong></p>
				<p><em><?php echo $staff_position; ?></em></p>
				<p><?php //the_content(); ?></p>
				<p class="btn-box"><a href="<?php echo get_permalink(); ?>" title="Learn More"><button class="cta-button-front orange">Learn More</button></a></p>
			</div> 
		</div>
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
		<div class="team-psr small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $psr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p><strong><?php the_title(); ?><?php if(get_field('credentials')) { echo ', '.$psr_credentials; } ?></strong></p>
				<p><em><?php echo $psr_position; ?></em></p>
				<p><?php the_content(); ?></p>
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
<?php endif; ?>
<hr>

<div class="row">
	<div class="meet-your-care-team small-12 columns">
	<h2>Meet Your Care Team</h2>
	</div>
</div>
<?php if ($page_location = 'brownwood-care-center') : ?> 
	<h3 class="small-11 small-offset-1">Primary Care</h3>
	<?php $bwprimary = array(
		'theme_location'  => '',
		'menu'            => 'brownwood-primary',
		'container'       => 'section',
		'container_class' => '',
		'container_id'    => 'all-doctors',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
		'depth'           => 0,
		'walker'          => new Staff_Walker(),
	);
	wp_nav_menu( $bwprimary );
	?>
	<h3 class="small-11 small-offset-1">Specialty Care</h3>
	<?php $bwspecialty = array(
		'theme_location'  => '',
		'menu'            => 'brownwood-specialty',
		'container'       => 'section',
		'container_class' => '',
		'container_id'    => 'all-doctors',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
		'depth'           => 0,
		'walker'          => new Staff_Walker(),
	);
	wp_nav_menu( $bwspecialty );
	?>
<?php else : ?>
<?php $construction = array(
	'theme_location'  => '',
	'menu'            => $page_location,
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
<?php endif; ?>