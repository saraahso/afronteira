<article id="post-<?php the_ID(); ?>" class="container mt-5 text-center af-single">

    <h1><?php the_title(); ?></h1>

    <div class="p-2 col-12 text-center af-single-image">
        <a href="<?php the_post_thumbnail_url() ?>" data-toggle="modal" data-target="#exampleModal">
            <img class="produto img-fluid mx-auto" src="<?php the_post_thumbnail_url() ?>">
        </a>
    </div>

    <div class="row">
        <div class="col-12 col-sm-6 mt-4 text-justify">
            <?php the_content(); ?>
        </div>
        <div class="col-12 col-sm-6 mt-4 text-justify">
            <?php echo do_shortcode('[contact-form-7 id="9092" title="Formulário de contato"]'); ?>
        </div>
    </div>
</article>


</div>
<?php get_footer();