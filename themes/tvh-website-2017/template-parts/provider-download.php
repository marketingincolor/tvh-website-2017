<?php
	// Custom Widget for Staff Location Pages
	// 
	$dr_firstname = get_field('first_name') ? get_field('first_name') : "" ;
	$dr_lastname = get_field('last_name') ? get_field('last_name') : "" ;
	$doctor = $dr_firstname . "&nbsp;" .$dr_lastname;
	$dr_location = get_field('location') ? get_field('location') : "" ;
?>

<a href="<?php echo site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tvh-ws-dir-img-cover.jpg" alt="Image of Provider Directory"></a>
