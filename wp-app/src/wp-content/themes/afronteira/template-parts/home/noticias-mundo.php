<?php
$args = array(
    'category_name' => 'estadual',
    'post_type' => 'post',
    'posts_per_page' => '2',
);

$query = new WP_Query( $args );

$args2 = array(
    'category_name' => 'mundo',
    'post_type' => 'post',
    'posts_per_page' => '3',
);

$query2 = new WP_Query( $args2 );

?>
<div class="container">

    <section class="row">
        <div class="col-12 col-sm 6">
            <h1 class="af-half-border pt-2">Noticias do Estado</h1>

            <div class="row mt-4 p-2">
                <?php if ( $query->have_posts() ) {
                    // The 2nd Loop
            while ( $query->have_posts() ) {
            $query->the_post(); ?>
             
                <article id="post-<?php the_ID(); ?>" class="col-12 col-sm-6 card af-card">
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
                } // end if ?>
            </div>
        </div>
        <div class="col-12 col-sm-6 section-mundo">
            <h1 class="af-half-border pt-2">Noticias do Mundo</h1>

            <?php if ( $query2->have_posts() ) {
                    // The 2nd Loop
            while ( $query2->have_posts() ) {
            $query2->the_post(); ?>
            <a href="<?php the_permalink() ?>">
                <article id="post-<?php the_ID(); ?>" class="row af-card-right mt-4">
                    <div class="col-3 af-img-card d-flex align-items-center">
                        <img class="card-img-left" src="<?php the_post_thumbnail_url() ?>"
                            alt="Ultimas Noticias">
                    </div>
                    <div class="col-9 card-body p-1">
                        <button class="btn btn-warning"> MUNDO </button>
                        <h5 class="af-card-title mt-2 m-0"><?php the_title(); ?></h5>
                        <div class="row ml-0">
                            <i class="fi-cwluhl-clock-wide fi-size-s ml-1"></i>
                            <time class="af-card-date p-1"
                                datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ) ?>"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></time>
                        </div>
                    </div>
                </article>
            </a>
            <?php }
                wp_reset_postdata();
                } // end if ?>
        </div>
    </section>

</div>