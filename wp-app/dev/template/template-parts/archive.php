<a href="<?php the_permalink() ?>">
    <article id="post-<?php the_ID(); ?>" class="row af-card-right mt-4 mb-5">
        <div class=" col-12 col-sm-3 af-img-card d-flex align-items-center p-0">
            <img class="card-img-left" src="<?php the_post_thumbnail_url() ?>" alt="Ultimas Noticias">
        </div>
        <div class="col-sm-9 col-12 card-body p-1">
            <button class="btn btn-danger">
                <?php foreach((get_the_category()) as $category){ echo $category->name;}	?>
            </button>
            <h5 class="af-card-title mt-2 m-0"><?php the_title(); ?></h5>
            <span class="af-card-text mb-0"><?php the_excerpt(); ?></span>
            <div class="row ml-0">
                <i class="fi-cwluhl-clock-wide fi-size-s ml-1"></i>
                <time class="af-card-date p-1"
                    datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ) ?>"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></time>
            </div>
        </div>
    </article>
</a>