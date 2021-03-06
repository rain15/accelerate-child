<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

//this goes in functions.php near the top
function my_scripts_method() {
// register your script location, dependencies and version
   wp_register_script('custom_script',
   get_stylesheet_directory_uri() . '/custom_js/jquery_twitter_module.js',
   array('jquery'),
   '1.0' );
 // enqueue the script
  wp_enqueue_script('custom_script');
  }

add_action('wp_enqueue_scripts', 'my_scripts_method');


function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );

}

add_action( 'init', 'create_custom_post_types' );

function accelerate_theme_child_widget_init() {
       /**
        * Creates a sidebar
        * @param string|array  Builds Sidebar based off of 'name' and 'id' values.
        */
        $args = array(
            'name'          => __( 'Homepage sidebar', 'accelerate-theme-child' ),
            'id'            => 'sidebar-2',
            'description'   => __('Appears on the static front page template', 'accelerate-theme-child' ),
            'before_widget' => '<aside id="%1$s class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>'
        );
    
        register_sidebar( $args );
    
}

add_action('widgets_init', 'accelerate_theme_child_widget_init');


/**
 * Hide editor for specific page templates.
 *
 */
add_action( 'admin_head', 'hide_editor' );

function hide_editor() {
    // Get the Post ID.
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;

    // Get the name of the Page Template file.
    $template_file = get_post_meta($post_id, '_wp_page_template', true);
    
    if($template_file == 'custom-ninjaforms-success.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    }
}


// Refresh those permalinks message
add_action('admin_notices', 'admin_notice_refresh_permalinks' );
function admin_notice_refresh_permalinks() {
  echo '<div class="error">
          <h2 style="background: lightgreen; height: 40px; padding:40px;color:red;font-size:40px;text-align:center;">Do not forget to refresh those permalinks! :)</h2>
        </div>';
}

