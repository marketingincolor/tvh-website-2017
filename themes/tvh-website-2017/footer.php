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
				<?php dynamic_sidebar( 'footer-widgets' ); ?><em>SOCIAL MEDIA AS WIDGET CONTENT</em><br>
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
