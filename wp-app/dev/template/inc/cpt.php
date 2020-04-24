<?php 
/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Videos', 'Post Type General Name' ),
        'singular_name'       => _x( 'Video', 'Post Type Singular Name' ),
        'menu_name'           => __( 'Videos' ),
        'parent_item_colon'   => __( 'Parent Video' ),
        'all_items'           => __( 'Todos Videos' ),
        'view_item'           => __( 'Ver Video' ),
        'add_new_item'        => __( 'Add Novo Video' ),
        'add_new'             => __( 'Add Novo' ),
        'edit_item'           => __( 'Editar Video' ),
        'update_item'         => __( 'Atualizar Video' ),
        'search_items'        => __( 'Procurar Video' ),
        'not_found'           => __( 'Not Found' ),
        'not_found_in_trash'  => __( 'Not found in Trash' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Videos' ),
        'description'         => __( 'Video' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-video-alt3',
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'Videos', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );