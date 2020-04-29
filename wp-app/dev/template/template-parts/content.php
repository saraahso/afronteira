<?php
$args = array(
    'orderby' => 'date',
    'order' => 'ASC',
    'post_type' => 'post',
    'posts_per_page' => '4',
);

$query = new WP_Query( $args );

?>
<div class="row">
    <div class="col-12 col-sm-8">
		<article id="post-<?php the_ID(); ?>" class="container mt-5 text-center af-single">
		
			<button type="button" class="btn btn-danger mb-5"><?php foreach((get_the_category()) as $category){ echo $category->name;}	?></button>

            <h1><?php the_title(); ?></h1>

            <div class="p-2 col-12 text-center af-single-image">
                <a href="<?php the_post_thumbnail_url() ?>" data-toggle="modal" data-target="#exampleModal">
                    <img class="produto img-fluid mx-auto" src="<?php the_post_thumbnail_url() ?>">
                </a>
            </div>
            <div class="row col-12 mt-4 text-justify">
                <?php the_content(); ?>
            </div>
        </article>
    </div>
    <div class="col-12 col-sm-4 section-single-ultimas">
        <h3 class="af-half-border pt-2 mt-5">Veja também</h3>

        <?php if ( $query->have_posts() ) {
                    // The 2nd Loop
            while ( $query->have_posts() ) {
            $query->the_post(); ?>
        <a href="<?php the_permalink() ?>">
            <article id="post-<?php the_ID(); ?>" class="row af-card-right mt-4">
                <div class="col-3 af-img-card d-flex align-items-center">
                    <img class="card-img-left" src="<?php the_post_thumbnail_url() ?>"
                        alt="Ultimas Noticias">
                </div>
                <div class="col-9 card-body p-1">
                    <button class="btn btn-warning"> 
						<?php foreach((get_the_category()) as $category){ echo $category->name;}	?>
					</button>
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
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img class="produto img-fluid mx-auto" src="<?php the_post_thumbnail_url() ?>">
            </div>
        </div>
    </div>
</div>


<script>
$('#myModal').on('shown.bs.modal', function() {
    $('#myInput').trigger('focus')
})
</script>

</div>
<?php get_footer();