<?php 

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Add Notícia';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Notícias';
        $labels->singular_name = 'Notícia';
        $labels->add_new = 'Add Notícia';
        $labels->add_new_item = 'Add Notícia';
        $labels->edit_item = 'Editar Notícia';
        $labels->new_item = 'Notícia';
        $labels->view_item = 'Ver Notícia';
        $labels->search_items = 'Buscar Notícias';
        $labels->not_found = 'Nenhum Notícia encontrado';
        $labels->not_found_in_trash = 'Nenhum Notícia na lixeira';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );