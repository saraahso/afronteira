<?php
$args = array(
    'category_name' => 'noticias-recentes',
    'post_type' => 'post',
    'posts_per_page' => '4',
);

$query = new WP_Query( $args );

?>
<div class="container">
    <h1 class="af-half-border pt-2">Últimas Notícias</h1>
    <div class="row mt-4 p-2">
        <?php if ( $query->have_posts() ) {
                    // The 2nd Loop
            while ( $query->have_posts() ) {
            $query->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="col-12 col-sm-3 card af-card">
            <a href="<?php the_permalink() ?>">
                <div class="af-img-card">
                    <img class="card-img-top" src="<?php the_post_thumbnail_url() ?>" alt="Ultimas Noticias">
                </div>
                <div class="card-body p-0">
                    <h5 class="af-card-title mt-2"><?php the_title(); ?></h5>
                    <span class="af-card-text mb-0"><?php the_excerpt(); ?></span>
                    <div class="row p-2">
                        <i class="fi-cwluhl-clock-wide fi-size-m ml-1"></i>
                        <time class="af-card-date m-1"
                            datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ) ?>"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></time>
                    </div>
                </div>
            </a>
        </article>

        <?php }
    wp_reset_postdata();
     } // end if 
    
     ?>
    </div>
</div>