<?php
/**
 * 
 *
 * @package WordPress
 * @subpackage afronteira
 * @since 1.0
 */

require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array(
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'audio',
) );

add_theme_support( 'editor-styles' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'responsive-embeds' );

// Admin logo function
function custom_loginlogo()
{
	echo '<style type="text/css">
	h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/images/logo8anos.png) !important; }
	</style>';
}
add_action('login_head', 'custom_loginlogo');
add_action('login_enqueue_scripts', 'my_login_logo_one');
    
// Favicon logo function
function myfavicon()
{
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/assets/images/logo8anos.png" />';
}
add_action('wp_head', 'myfavicon');

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

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Produtos';
    $submenu['edit.php'][5][0] = 'Produtos';
    $submenu['edit.php'][10][0] = 'Add Produto';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Produtos';
        $labels->singular_name = 'Produto';
        $labels->add_new = 'Add Produto';
        $labels->add_new_item = 'Add Produto';
        $labels->edit_item = 'Editar Produto';
        $labels->new_item = 'Produto';
        $labels->view_item = 'Ver Produto';
        $labels->search_items = 'Buscar Produtos';
        $labels->not_found = 'Nenhum Produto encontrado';
        $labels->not_found_in_trash = 'Nenhum Produto na lixeira';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


register_nav_menus(
    array(
        'meu_menu' => __( 'Menu Principal', 'meu-text-domain' )
    )
);