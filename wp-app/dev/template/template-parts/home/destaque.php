<?php
$args = array(
    'category_name' => 'cidade',
    'post_type' => 'post',
    'posts_per_page' => '1',
);

$query = new WP_Query( $args );

$args2 = array(
    'category_name' => 'estadual',
    'post_type' => 'post',
    'posts_per_page' => '1',
);

$query2 = new WP_Query( $args2 );

?>

<div class="row">
    <div class="col-12 col-sm-9 af-border">
        <?php
                    echo do_shortcode('[smartslider3 slider=3]');
                ?>
    </div>
    <div class="col-12 col-sm-3 ">
    <?php if ( $query->have_posts() ) {
                    // The 2nd Loop
            while ( $query->have_posts() ) {
            $query->the_post(); ?>
        <div id="post-<?php the_ID(); ?>"  class="row af-card-destaque"
            style="background: url('<?php the_post_thumbnail_url() ?>'); background-size: contain;">
            <div class="card-body mt-5">
                <button type="button" class="btn btn-danger"><?php foreach((get_the_category()) as $category){ echo $category->name;}	?></button>
                <h5 class="af-card-title mt-2"><?php the_title(); ?></h5>
            </div>
        </div>
        <?php }
    wp_reset_postdata();
     } // end if 
    
     ?>

<?php if ( $query2->have_posts() ) {
                    // The 2nd Loop
            while ( $query2->have_posts() ) {
            $query2->the_post(); ?>
        <div id="post-<?php the_ID(); ?>" class="row af-card-destaque mt-3"
            style="background: url('<?php the_post_thumbnail_url() ?>'); background-size: contain;">
            <div class="card-body mt-5">
            <button type="button" class="btn btn-danger"><?php foreach((get_the_category()) as $category){ echo $category->name;}	?></button>
                <h5 class="af-card-title"><?php the_title(); ?></h5>
            </div>
        </div>
        <?php }
    wp_reset_postdata();
     } // end if 
    
     ?>
    </div>
</div>