<?php
// Custom Widget for Staff Location Pages
// 
$page_location = $post->post_name;
?>
<!--DOCTOR TEMPLATE -->
<div class="row">
	<div class="meet-your-care-team small-12 columns">
	<h2>Meet Your Care Team</h2>
	</div>
</div>
<?php if ($page_location == 'brownwood-care-center') : ?> 
	<h3 class="small-11 small-offset-1">Primary Care</h3>
	<?php $bwprimary = array(
		'theme_location'  => '__no_such_location',
		'menu'            => 'brownwood-primary',
		'container'       => 'section',
		'container_class' => '',
		'container_id'    => 'all-doctors',
		'echo'            => true,
		'fallback_cb'     => false,
		'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
		'depth'           => 0,
		'walker'          => new Staff_Walker(),
	);
	wp_nav_menu( $bwprimary );
	?>
	<h3 class="small-11 small-offset-1">Specialty Care</h3>
	<?php $bwspecialty = array(
		'theme_location'  => '__no_such_location',
		'menu'            => 'brownwood-specialty',
		'container'       => 'section',
		'container_class' => '',
		'container_id'    => 'all-doctors',
		'echo'            => true,
		'fallback_cb'     => false,
		'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
		'depth'           => 0,
		'walker'          => new Staff_Walker(),
	);
	wp_nav_menu( $bwspecialty );
	?>
<?php else : ?>
<?php $construction = array(
	'theme_location'  => '__no_such_location',
	'menu'            => $page_location,
	'container'       => 'section',
	'container_class' => '',
	'container_id'    => 'all-doctors',
	'echo'            => true,
	'fallback_cb'     => false,
	'items_wrap'      => '<div class="row" data-equalizer data-equalize-by-row="true">%3$s</div>',
	'depth'           => 0,
	'walker'          => new Staff_Walker(),
);
wp_nav_menu( $construction );
?>
<?php endif; ?>
<!--END DOCTOR TEMPLATE-->
