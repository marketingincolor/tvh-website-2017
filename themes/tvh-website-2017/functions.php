<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );


/* ------------------------------------------------------------------------ *
 * Theme Options - Add Menu
 * ------------------------------------------------------------------------ */
function tvh_theme_menu()
{
	//add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function );
 	add_theme_page( 'Theme Option', 'Theme Options', 'manage_options', 'tvh-theme-options', 'tvh_theme_page');  
}
add_action('admin_menu', 'tvh_theme_menu');
/* ------------------------------------------------------------------------ *
 * Theme Options - Add Content to Theme Options Page
 * ------------------------------------------------------------------------ */
function tvh_theme_page()
{
echo '<div class="wrap">
		<div id="icon-options-general" class="icon32"></div>
			<h1>The Villages Health: Theme Options</h1>
			<div id="poststuff">
				<div id="post-body" class="metabox-holder columns-1">
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
						<div class="postbox">
							<div class="inside">
								<div class="section-panel">
									<h1></h1>
									<form method="post" enctype="multipart/form-data" action="options.php">';
									settings_fields('tvh_theme_options'); 
									do_settings_sections('tvh_theme_options.php');
									echo '<p class="submit">
									<input type="submit" class="button-primary" value="Save Changes" />
									</p>
									</form>
								</div>
								<p></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> ';
}
       
/* ------------------------------------------------------------------------ *
 * Theme Options - Register Settings
 * ------------------------------------------------------------------------ */
function tvh_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'tvh_theme_options', 'tvh_theme_options', 'tvh_validate_settings' );
    // Add settings section
    add_settings_section( 'tvh_text_section', '', 'tvh_display_section', 'tvh_theme_options.php' );
    //Facebook Link Args
    $fb_args = array(
      'type'      => 'text',
      'id'        => 'tvh_fb_textbox',
      'name'      => 'tvh_fb_textbox',
      'desc'      => '',
      'std'       => '',
      'label_for' => 'tvh_fb_textbox',
      'class'     => 'css_class'
    );
    $twitter_args = array(
      'type'      => 'text',
      'id'        => 'tvh_twitter_textbox',
      'name'      => 'tvh_twitter_textbox',
      'desc'      => '',
      'std'       => '',
      'label_for' => 'tvh_twitter_textbox',
      'class'     => 'css_class'
    );
    $youtube_args = array(
      'type'      => 'text',
      'id'        => 'tvh_youtube_textbox',
      'name'      => 'tvh_youtube_textbox',
      'desc'      => '',
      'std'       => '',
      'label_for' => 'tvh_youtube_textbox',
      'class'     => 'css_class'
    );
    add_settings_field( 'tvh_fb_link', 'Facebook Link:', 'tvh_display_setting', 'tvh_theme_options.php', 'tvh_text_section', $fb_args );
    add_settings_field( 'tvh_twitter_link', 'Twitter Link:', 'tvh_display_setting', 'tvh_theme_options.php', 'tvh_text_section', $twitter_args );
    add_settings_field( 'tvh_youtube_link', 'YouTube Link:', 'tvh_display_setting', 'tvh_theme_options.php', 'tvh_text_section', $youtube_args );
}
add_action( 'admin_init', 'tvh_register_settings' );
/* ------------------------------------------------------------------------ *
 * Theme Options - Displays Theme Sections
 * ------------------------------------------------------------------------ */
function tvh_display_section($section){ 
}
/* ------------------------------------------------------------------------ *
 * Theme Options - Display Settings
 * ------------------------------------------------------------------------ */
function tvh_display_setting($args)
{
    extract( $args );
    $option_name = 'tvh_theme_options';
    $options = get_option( $option_name );
    switch ( $type ) {  
          case 'text':  
              $options[$id] = stripslashes($options[$id]);  
              $options[$id] = esc_attr( $options[$id]);  
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";
              echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
          break;  
    }
}
/* ------------------------------------------------------------------------ *
 * Theme Options - Validate Settings
 * ------------------------------------------------------------------------ */
function tvh_validate_settings($input)
{
  foreach($input as $k => $v)
  {
    $newinput[$k] = trim($v);
    
    // Check the input is a letter or a number
    // if(!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
    //   $newinput[$k] = '';
    // }
  }
  return $newinput;
}
/* ------------------------------------------------------------------------ *
 * Menus - Footer Menu
 * ------------------------------------------------------------------------ */
register_nav_menus( array(
  'tvh_footer_menu' => 'Footer Menu',
) );