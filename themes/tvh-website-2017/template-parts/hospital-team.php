<?php
// Custom Widget for Hospital Staff Location Pages
// 
$page_location = $post->post_name;
?>
<!--HOSPITALIST TEMPLATE -->
<div class="row">
	<div class="meet-your-hospitalist-team small-12 columns">
	<h2>Meet the team.</h2>
	</div>
</div>
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
<!--END HOSPITALIST TEMPLATE-->
