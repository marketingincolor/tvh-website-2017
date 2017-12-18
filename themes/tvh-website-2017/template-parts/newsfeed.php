<?php
$args = array(
	'category_name' => 'news',
	'posts_per_page' => -1,
	'post_type' => 'post'
); ?>
<div class="entry-content">
<ul class="display-posts-listing">

<?php 
$news = new WP_Query( $args );
if($news->have_posts()) :
	while ($news->have_posts()) : $news->the_post(); 
		$img_round = get_field('sm_thumb') ? get_field('sm_thumb') : "" ;
		if ($img_round == '' ) {
			$use_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
			$display_image = esc_url($use_full[0]);
		} else  {
			$display_image = $img_round['url'];
		}
	?>
	<li class="listing-item">
		<a href="<?php echo get_permalink(); ?>" class="image"><img src="<?php echo $display_image; ?>" alt="photo"></a>
		<a href="<?php echo get_permalink(); ?>" class="title"><?php the_title(); ?></a>
		<span class="excerpt"><?php echo get_the_excerpt(); ?></span>
	</li> 
<?php 
	endwhile; 
endif;
wp_reset_postdata();
?>
</ul>
</div>