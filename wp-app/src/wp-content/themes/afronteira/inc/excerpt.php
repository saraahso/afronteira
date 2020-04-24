<?php 
function get_excerpt($excerpt="",$limit=120){

    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = mb_substr($excerpt, 0, $limit);
    $excerpt = mb_substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    $excerpt = $excerpt.'...';
    return $excerpt;
}   
add_filter('get_the_excerpt',"get_excerpt");