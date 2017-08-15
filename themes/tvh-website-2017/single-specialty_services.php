<?php
/**
 * The template for the Specialty Services Custom Post Type pages
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$location = get_field('carecenter') ? get_field('carecenter') : "" ;

$thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
$thumbnail_url = $thumbnail_url[0];
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap sidebar-right" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<?php //wp_nav_menu( array( 'menu' => 'specialty', 'menu_class' => '', 'container_class' => 'specialty-subnav') ); ?>

		<div class="specialty-subnav">
			<div class="serv-sub<?php echo ( is_single('audiology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/audiology">Audiology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('cardiology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/cardiology">Cardiology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('dermatology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/dermatology">Dermatology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('endocrinology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/endocrinology">Endocrinology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('gastroenterology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/gastroenterology">Gastroenterology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('general-surgery') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/general-surgery">General Surgery</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('gynecology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/gynecology">Gynecology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('neurology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/neurology">Neurology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('orthopaedics') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/orthopaedics">Orthopaedics</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('rheumatology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/rheumatology">Rheumatology</a>
			</div>
			<div class="serv-sub<?php echo ( is_single('urology') ? ' current' : ''); ?>">
				<a href="<?php echo site_url('/specialty-services'); ?>/urology">Urology</a>
			</div>
		</div>
		
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content row columns">
			<div class="entry-dr-meta">

			<?php if( get_field('carecenter') ): ?>
			    <!--<h5>Care Center: <span><?php echo $location; ?></span></h5>-->
			<?php endif; ?>

			</div>

			<?php the_content(); ?>

		</div>
		<footer>
			<?php
				/*wp_link_pages(
					array(
						'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
						'after'  => '</p></nav>',
					)
				);*/
			?>
			<p><?php //the_tags(); ?></p>
		</footer>
		<?php //the_post_navigation(); ?>
		<?php do_action( 'foundationpress_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_post_after_comments' ); ?>

		<?php get_template_part( 'template-parts/specialty-team' ); ?>
		
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('specialtyservices'); ?>
</div>
<?php get_footer();
