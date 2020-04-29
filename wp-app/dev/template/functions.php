<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage afronteira
 * @since 1.0
 */

 /**
 * Change post label
 */
require_once( get_template_directory() . '/inc/change-post-label.php' );

/**
 * Excerpt
 */
require_once( get_template_directory() . '/inc/excerpt.php' );

/**
 * Custom login logo
 */
require_once( get_template_directory() . '/inc/custom-login-logo.php' );

/**
 * Theme Supports
 */
require_once( get_template_directory() . '/inc/theme-supports.php' );

/**
 * Theme Supports
 */
require_once( get_template_directory() . '/inc/favicon.php' );

/**
 * Custom post types
 */
require_once( get_template_directory() . '/inc/cpt.php' );


function wptuts_scripts_basic()
{
    // For either a plugin or a theme, you can then enqueue the script:
	//wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ), '1.0.0');
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    wp_enqueue_script( 'friconix', 'https://friconix.com/cdn/friconix.js');
    
}
add_action('wp_enqueue_scripts', 'wptuts_scripts_basic');

function wptuts_styles_with_the_lot()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
	//wp_enqueue_style('Font-Awesome', get_template_directory_uri() . '/src/css/font-awesome.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');
	//wp_enqueue_style('Roboto Condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');
	//wp_enqueue_style('Fjalla One', 'fonts.googleapis.com/css?family=Fjalla+One');
}
add_action('wp_enqueue_scripts', 'wptuts_styles_with_the_lot');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
add_action('get_header', 'my_filter_head');





