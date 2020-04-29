
    <article class="row af-card-right mt-1">
        <div class="col-3 af-img-card embed-container embed-container-peq">
            <?php the_field('link_do_video'); ?>
        </div>
        <div class="col-9 card-body p-1">
            <button class="btn btn-danger"> VIDEO </button>
            <h5 class="af-card-title mt-2 m-0"><?php the_title(); ?></h5>
            <div class="row ml-0">
                <i class="fi-cwluhl-clock-wide fi-size-s ml-1"></i>
                <time class="af-card-date p-1"
                    datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ) ?>"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></time>
            </div>
        </div>

    </article>
