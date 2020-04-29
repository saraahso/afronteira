<article class="col-12 col-sm-6 card af-card">
    <div class="af-img-card">
        <div class="card-img-top embed-container embed-container-teaser">
        <?php the_field('link_do_video'); ?>
        </div>
        <button class="btn btn-danger"> VIDEO </button>
    </div>
    <div class="card-body p-1">
        <div class="row p-2">
            <i class="fi-cwluhl-clock-wide fi-size-m ml-1"></i>
            <time class="af-card-date m-1"
                datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ) ?>"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' ); ?></time>
        </div>
        <h5 class="af-card-title mt-2"><?php the_title(); ?></h5>
    </div>
</article>
<div class="col-12 col-sm-6">