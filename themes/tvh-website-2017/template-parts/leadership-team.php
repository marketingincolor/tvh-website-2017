<?php
// Custom Widget for Staff Location Pages
// 
$page_location = $post->post_name;
?>
<!--LEADERSHIP TEMPLATE -->
<div class="row">
	<div class="meet-your-leadership-team small-12 columns">
	<h2>Meet the visionary leaders behind healthier health care.</h2>
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
<!--END LEADERSHIP TEMPLATE-->
