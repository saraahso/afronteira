<?php
get_header(); ?>
<main class="mt-5">

    <section class="row af-destaques ">
        <div class="container">
            <?php include( 'template-parts/home/destaque.php' ); ?>
        </div>
    </section> <!-- end af-destaques -->

    <section class="container-fluid mt-5 pt-4 pb-4 af-ultimas-noticias">
        <?php include( 'template-parts/home/ultimas-noticias.php' ); ?>
    </section>

    <section class="container-fluid mt-5 pt-4 pb-4 af-section-3">
        <div class="container">
            <div class="row mt-4 p-2 af-ultimos-videos">
                <section class="col-12 col-sm-9">
                    <?php include( 'template-parts/home/ultimos-videos.php' ); ?>
                </section>
                <section class="col-12 col-sm-3 af-redessociais">
                    <?php include( 'template-parts/home/redes-sociais.php' ); ?>
                </section>
            </div>
        </div>
        </div>
    </section>

    <section class="container-fluid mt-5 pt-4 pb-4 af-noticias-cidade">
        <?php include( 'template-parts/home/noticias-cidade.php' ); ?>
    </section>

    <section class="container-fluid mt-5 pt-4 pb-4 af-noticias-mundo">
        <?php include( 'template-parts/home/noticias-mundo.php' ); ?>
    </section>

    <section class="container-fluid mt-5 pt-4 pb-4 af-colunistas">
        <?php include( 'template-parts/home/colunistas.php' ); ?>
    </section>
</main>

<?php
get_footer(); ?>