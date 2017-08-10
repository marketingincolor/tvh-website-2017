<?php
// Custom Widget for Staff Location Pages
// 
//$staff_location = get_field('location') ? get_field('location') : "" ;
$staff_location = get_the_title();
$args = array(
	'meta_key' => 'carecenter',
	'meta_value' => $staff_location,
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

	<div class="row">

	<?php 
	$showteam = new WP_Query( $args );
	if($showteam->have_posts()) :
		while ($showteam->have_posts()) : $showteam->the_post(); 
		$dr_credentials = get_field('credentials') ? get_field('credentials') : "" ;
		$dr_position = get_field('position') ? get_field('position') : "" ;
		$dr_round = get_field('round_thumb') ? get_field('round_thumb') : "" ;
		?>
		<!-- Loop to display team -->
		<div class="small-12 medium-6 columns">
			<div id="individual-doctor" class="text-center">
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