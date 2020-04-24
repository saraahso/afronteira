<?php
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

add_action( 'after_setup_theme', 'misha_gutenberg_css' );
 
function misha_gutenberg_css(){
 
	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
	add_editor_style( 'style.css' ); // tries to include style-editor.css directly from your theme folder
 
}