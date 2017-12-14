<?php
// Custom Widget for Hospital Staff Location Pages
// 
$page_location = $post->post_name;
$args = array(
	'category_name' => 'hospitalist',
	'posts_per_page' => -1,
	'post_type' => 'staff'
);
?>

<!--HOSPITALIST TEMPLATE -->
<section id="hospitalist">
	<div class="row">
		<div class="meet-your-hospitalist-team small-12 columns">
		<h2>Meet the team.</h2>
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
				<p><strong><?php the_title(); ?><?php if(get_field('credentials')) { echo ', '.$dr_credentials; } ?></strong></p>
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

<div class="row">
	<div class="meet-your-hospitalist-team small-12 columns">
	<h2>Meet the team.</h2>
	</div>
</div>
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