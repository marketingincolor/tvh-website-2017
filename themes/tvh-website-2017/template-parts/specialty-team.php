<?php
// Custom Widget for Staff Location Pages
// 
$specialty_name = $post->post_name;
?>
<!--DOCTOR TEMPLATE -->
<?php $construction = array(
	'theme_location'  => '__no_such_location',
	'menu'            => $specialty_name,
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
<!--END DOCTOR TEMPLATE-->
