<?php	
require_once 'includes/controls/textarea_custom_control.php';

//-- Theme Setup ------------------------------------------------------------
require_once 'includes/theme_setup.php';
require_once 'includes/theme/image_settings.php';
require_once 'includes/theme/selective_menu_walker.php';
require_once 'includes/theme/menus.php';

//-- Utilities --------------------------------------------------------------
require_once 'includes/renderer.php';
require_once 'includes/helpers/tedx_helpers.php';

//-- Advanced Custom Fields -------------------------------------------------
require_once 'includes/advanced_custom_fields/template_home.php';

//-- Admin Inclues ----------------------------------------------------------
require_once 'includes/admin/plugin_dependencies.php';

//-- Theme Query Helpers ----------------------------------------------------
require_once 'includes/tedx_query.php';

//-- Custom Post Types ------------------------------------------------------
require_once 'includes/custom_post_types/partner.php';
$PartnerPostType = new PartnerPostType();

require_once 'includes/custom_post_types/team.php';
$TeamPostType = new TeamPostType();

require_once 'includes/custom_post_types/talk.php';
$TalkPostType = new TalkPostType();

require_once 'includes/custom_post_types/speaker.php';
$SpeakerPostType = new SpeakerPostType();

require_once 'includes/custom_post_types/schedule_items.php';
$ScheduleItemsPostType = new ScheduleItemsPostType();

/* moving these to CDN where possible */
function tedx_styles()
{
	// Register Bootstrap, FontAwesome and App styles
	wp_register_style( 'vendor-styles', get_template_directory_uri() . '/dist/css/vendor.css', array(), '3.3.7' );
    wp_register_style( 'application-styles', get_template_directory_uri() . '/dist/css/application.min.css', array(), '201508051' );
    // Load main stylesheet
	wp_enqueue_style( 'tedx-styles', get_stylesheet_uri() );

	//  enqueue the styles
	wp_enqueue_style( 'vendor-styles' );
    wp_enqueue_style( 'application-styles' );
    wp_enqueue_style( 'tedx-styles' );

}
add_action( 'wp_enqueue_scripts', 'tedx_styles' );

/* moving these to CDN where possible */
function tedx_scripts()
{
	// Register JS
	wp_register_script( 'google-maps', '//maps.google.com/maps/api/js?sensor=false', array(), '20150805', false );
	wp_register_script( 'tedx-jquery', '//code.jquery.com/jquery-1.11.0.min.js', array( 'jquery' ), '20150805', true );
	wp_register_script( 'tedx-jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js', array( 'jquery', true ), '20150805', true );
	wp_register_script( 'vendor-js', get_template_directory_uri() . '/dist/js/vendor.js', array( 'jquery' ), '20150805', true );
	wp_register_script( 'application-js', get_template_directory_uri() . '/dist/js/application.js', array( 'jquery' ), '20150805', true );

	//  enqueue the scripts
    wp_enqueue_script( 'google-maps' );
	wp_enqueue_script( 'tedx-jquery' );
	wp_enqueue_script( 'tedx-jquery-migrate' );
	wp_enqueue_script( 'vendor-js' );
	wp_enqueue_script( 'application-js' );

}
add_action( 'wp_enqueue_scripts', 'tedx_scripts' );

/* Custom Login Page logo and link */
	function tedx_custom_login_logo() {
	    echo '	    <style type="text/css">
	    		body { background: #000; }
	    	    .login h1 a { background-image:url('.get_theme_mod('logo').')  !important; background-size: contain; width: auto; height: 56px; }
	    	    .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
		    	    color: #e62b1e;
	    	    }
	    	    .login .button-primary { 
		    	    	background: #e62b1e; 
				border-color: #c41919; 
				box-shadow: 0px 1px 0px rgba(230, 200, 200, 0.5) inset, 0px 1px 0px rgba(0, 0, 0, 0.15);
				}
			.login .button-primary:hover {
				background: darkred;
				border-color: maroon;
				box-shadow: 0px 1px 0px rgba(230, 200, 200, 0.5) inset, 0px 1px 0px rgba(0, 0, 0, 0.15);
			}
	    </style>';
	}
	add_action('login_head', 'tedx_custom_login_logo');
	
	add_filter( 'login_headerurl', 'tedx_custom_login_url' );
	function tedx_custom_login_url($url) {
	    return get_bloginfo('home');
	}

// As of WP 3.1.1 addition of classes for css styling to menu parents of custom post types.
// We want the correct classes added to the correct custom post type parent in the wp-nav-menu for css styling and highlighting, so we're modifying each individually...
// The id of each link is required for each one you want to modify
// Place this in your WordPress functions.php file

function remove_parent_classes($class)
{
  // check for current page classes, return false if they exist.
	return ($class == 'current_page_item' || $class == 'current_page_parent' || $class == 'current_page_ancestor'  || $class == 'current-menu-item') ? FALSE : TRUE;
}

function add_class_to_wp_nav_menu($classes)
{
     switch (get_post_type())
     {
     	case 'speaker':
     		// we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items. Need to check speaker.php to try and add the subnav area, if possible
     		$classes = array_filter($classes, "remove_parent_classes");

     		// add the current page class to a specific menu item (replace ###).
     		if (in_array('menu-item-47', $classes))
     		{
     		   $classes[] = 'current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor';
         }
     		break;

     	case 'talk':
     		// we're viewing a custom post type, so remove the 'current_page_xxx and current-menu-item' from all menu items.
     		$classes = array_filter($classes, "remove_parent_classes");

     		// add the current page class to a specific menu item (replace ###).
     		if (in_array('menu-item-952', $classes))
     		{
     		   $classes[] = 'current_page_parent';
               }
     		break;

      // add more cases if necessary and/or a default
     }
	return $classes;
}
add_filter('nav_menu_css_class', 'add_class_to_wp_nav_menu');

              