<?php
// Custom Widget for Staff Location Pages
// 
//$staff_location = get_field('location') ? get_field('location') : "" ;
$staff_location = get_the_title();
$staff_type1 = get_category_by_slug( 'physician-assistant' );
$staff_type2 = get_category_by_slug( 'patient-representative' );
$staff_type3 = get_category_by_slug( 'other-doctors');
$staff_type4 = get_category_by_slug( 'nurse' );
$staff_type5 = get_category_by_slug( 'hospitalist' );
$staff_types = $staff_type1->term_id . ', ' . $staff_type2->term_id . ', ' . $staff_type3->term_id . ', ' . $staff_type4->term_id . ', ' . $staff_type5->term_id;
$doc_args = array(
	'meta_key' => 'carecenter',
	'meta_value' => $staff_location,
	'category__not_in' => array( 6, 7, 9, 8, 10 ),
	'post_type' => 'staff'
);
$staff_args = array(
	'meta_key' => 'carecenter',
	'meta_value' => $staff_location,
	'category__in' => array( 6, 7, 9, 8, 10 ),
	'post_type' => 'staff'
);
?>


<!--DOCTOR TEMPLATE -->
<section id="all-doctors">
	<div class="row">
		<div class="meet-your-care-team small-12-columns">
		<h3>Meet Your Care Team</h3>
		</div>
	</div>

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

	<?php 
	$show_staff = new WP_Query( $staff_args );
	if($show_staff->have_posts()) :
		while ($show_staff->have_posts()) : $show_staff->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center" data-equalizer-watch>
				<img src="<?php echo $dr_round['url']; ?>" alt="<?php the_title(); ?> photo">
				<p>
					<?php the_title(); ?>
					<?php if(get_field('credentials')) { echo ', '.$dr_credentials; }  ?>
				</p>
				<p><em><?php echo $dr_position; ?></em></p>
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





<!--
<?php

   	$args = array(
		'post_type' => 'staff',
		'meta_key' => 'carecenter',
		'meta_value' => 'Belleview Care Center'
		);
   $showteam = new WP_Query($args);

   if($showteam->have_posts()) : 
      while($showteam->have_posts()) : 
         $showteam->the_post();
?>
         <h1><?php the_title() ?></h1>
         <div class='post-content'><?php the_content() ?></div>      
<?php
      endwhile;
   else: 
?>
      Oops, there are no posts.
<?php
   endif;
   wp_reset_postdata();
?>
-->