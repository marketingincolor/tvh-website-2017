<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero row expanded" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
	<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <div class="featured-display medium-10 medium-centered">
    	<div class="featured-caption"><?php echo $caption; ?></div>
    </div>
	<?php endif; ?>

	</header>

<?php else : ?>
	<?php /* <header class="featured-hero row expanded" role="banner" data-interchange="[//satyr.io/1440x365/seagreen.png, small], [//satyr.io/1440x365/seagreen.png, medium], [//satyr.io/1440x365/seagreen.png, large], [//satyr.io/1440x365/seagreen.png, xlarge]">
	</header> */ ?>
<?php endif; ?>

