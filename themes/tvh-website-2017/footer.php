<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>


				<!-- Social Links -->
				<?php 
					//Get Custom Theme Options
					$options = get_option('tvh_theme_options');
					//If we have facebook data add icon
					if ( $options['tvh_fb_textbox'] != null || $options['tvh_fb_textbox'] != "" ) : ?>
						<div id="footer-social-container">
							<div class="footer-social-link">
								<a href="<?php echo $options['tvh_fb_textbox']; ?>" title="The Villages Health Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</div>
					<?php endif; 
					//If we have twitter data add icon
					if ( $options['tvh_linkedin_textbox'] != null || $options['tvh_linkedin_textbox'] != "") : ?>
							<div class="footer-social-link">
								<a href="<?php echo $options['tvh_linkedin_textbox']; ?>" title="The Villages Health LinkedIn" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</div>
					<?php endif; 
					//If we have YouTube data dd icon
					if ( $options['tvh_youtube_textbox'] != null || $options['tvh_youtube_textbox'] != "") : ?>
							<div class="footer-social-link">
								<a href="<?php echo $options['tvh_youtube_textbox']; ?>" title="The Villages Health YouTube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							</div>
						</div>
					<?php endif; 
				?>
				<!-- /Social Links -->




				<?php do_action( 'foundationpress_after_footer' ); ?>

				<?php 
					$args = array(
						'theme_location'  => 'tvh_footer_menu',
						'menu'            => 'Footer Menu',
						'container'       => 'div',
						'container_class' => 'menu-footer-container',
						'container_id'    => '',
						'menu_class'      => 'tvh-footer-menu',
						'menu_id'         => 'tvh-footer-menu',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu( $args );
				?>

				<p class="foot-copyright">&copy; Holding Company of The Villages, Inc., <?php echo date('Y'); ?> All Rights Reserved. The Villages is a registered trademark of Holding Company of The Villages, Inc.</p>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
