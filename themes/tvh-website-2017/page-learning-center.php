<?php
/**
 * The template for displaying Learning Center Main page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

 <div class="main-wrap" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			

			<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			  <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true"><button class="top-button orange">Classes</button></a></li>
			  <li class="tabs-title"><a href="#panel2c"><button class="top-button orange">Boot Camps</button></a></li>
			  <li class="tabs-title"><a href="#panel3c"><button class="top-button orange">Screenings</button></a></li>
			  <li class="tabs-title"><a href="#panel4c"><button class="top-button orange">Location</button></a></li>
			</ul>

			<div class="tabs-content" data-tabs-content="collapsing-tabs">
			  <div class="tabs-panel is-active" id="panel1c">
			    <?php echo EM_Events::output(array('scope'=>'3-months', 'category'=>'classes' )); ?>
			  </div>
			  <div class="tabs-panel" id="panel2c">
			    <?php echo EM_Events::output(array('scope'=>'3-months', 'category'=>'boot-camps' )); ?>
			  </div>
			  <div class="tabs-panel" id="panel3c">
			    <?php echo EM_Events::output(array('scope'=>'3-months', 'category'=>'screenings' )); ?>
			  </div>
			  <div class="tabs-panel" id="panel4c">
			    <?php echo EM_Events::output(array('scope'=>'3-months', 'orderby'=>'location_name' )); ?>
			  </div>
			</div>


			<?php //echo do_shortcode('[event_search_form]'); ?>
			<!--<h2> Upcoming Events</h2>-->
			<?php //echo EM_Events::output(array('limit'=>10, 'pagination'=>1 )); ?>

			<!--<div class='nf-form-cont'>
				<form action='../events-listings' method='post'>
					<p>To find the learning experience that's just right for you, search our range of topics using the following options:</p>
					<div class="small-6 columns">
						<select name='event-type'>
							<option value=''>Choose Type of Event</option>
							<option value='classes'>Classes</option>
							<option value='screenings'>Screenings</option>
							<option value='boot-camps'>Boot Camps</option>
						</select>
					</div>

					<div class="small-6 columns">
					<select name='event-location'>
						<option value=''>Choose Location</option>
						<option value='2'>Belleview Care Center</option>
						<option value='4'>Brownwood Care Center</option>
						<option value='8'>Colony Care Center</option>
						<option value='5'>Creekside Care Center</option>
						<option value='1'>Mulberry Grove Care Center</option>
						<option value='6'>Pinellas Care Center</option>
						<option value='7'>Santa Barbara Care Center</option>
						<option value='3'>Specialty Care Center</option>
					</select>
					</div>

					<input class='event-button orange' type='submit' value='Submit'> 

				</form>
			</div>-->

		</div>
	</article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php //get_sidebar(); ?>

<?php if ( is_page('find-a-doctor') ) : ?>

<?php elseif ( is_page('hospital-care') ) : ?>

<?php elseif ( is_page('leadership') ) : ?>

<?php endif; ?>

 </div>

<?php get_template_part( 'template-parts/testimonial-main' ); ?>

 <?php get_footer();
