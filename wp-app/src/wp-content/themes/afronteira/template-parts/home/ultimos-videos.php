<?php
$args = array(
    'post_type' => 'Videos',
    'posts_per_page' => '4',
    'orderby' => 'DESC',
    'paged'          => get_query_var( 'paged' ),
);

$query = new WP_Query( $args );
?>
<h1 class="af-half-border pt-2">Últimos Videos</h1>
<div class="row pt-3">
        <?php if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                $query->the_post(); 

                $isFirstPost = $query->current_post == 0 && !is_paged();

                ($isFirstPost)
                ? get_template_part('template-parts/video/teaser', 'video')
                : get_template_part('template-parts/video/videos', 'card');
            }
        wp_reset_postdata();
     } // end if 
     ?>
     </div>
</div>