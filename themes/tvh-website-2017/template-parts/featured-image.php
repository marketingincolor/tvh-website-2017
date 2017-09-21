<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
$small_thumb = get_field('special_thumb') ? get_field('special_thumb') : "" ;
if ( (has_post_thumbnail( $post->ID )) && $small_thumb == "" ) : ?>
	<header class="featured-hero row expanded no-thumb" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
	<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <div class="featured-display medium-10 medium-centered">
    	<div class="featured-caption"><?php echo $caption; ?></div>
    </div>
	<?php endif; ?>
	</header>

<?php elseif ( (has_post_thumbnail( $post->ID )) && $small_thumb != "" ) : ?>

	<header class="featured-hero row expanded show-for-medium" role="banner" data-interchange="[<?php echo $small_thumb['url']; ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]">
	<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <div class="featured-display medium-10 medium-centered">
    	<div class="featured-caption"><?php echo $caption; ?></div>
    </div>
	<?php endif; ?>
	</header>

	<header class="sm-featured-hero row expanded show-for-small-only" role="banner" data-interchange="[<?php echo $small_thumb['url']; ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium]">
	<?php if ( $caption = get_post( get_post_thumbnail_id() )->post_excerpt ) : ?>
    <div class="featured-display medium-10 medium-centered">
    	<div class="featured-caption"><?php echo $caption; ?></div>
    </div>
	<?php endif; ?>
	</header>

<?php endif; ?>

