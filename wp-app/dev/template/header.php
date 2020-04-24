<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<?php
$args = array(
    'category_name' => 'noticias-recentes',
    'post_type' => 'post',
    'posts_per_page' => '4',
    'orderby' => 'date',
    'order' => 'DESC',
);

$query = new WP_Query( $args );

?>

<body class="container-fluid">
    <header>
        <section class="row af-top-row">
            <div class="container">

                <div class="row p-2 ml-1 carousel slide" data-ride="carousel">
                    <div class="col-12 col-sm-8 p-2 carousel-inner">
                        <p class="float-left"><i class="fi-cwluxl-lightning-solid fi-size-l"></i> <span>TRENDING</span>
                        </p>
                        <?php if ( $query->have_posts() ) {
                        // The 2nd Loop
                        while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                            <div class="carousel-item ">| <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </div>
                        <?php }
                        wp_reset_postdata();
                        } // end if 
                        
                        ?>
                        <div class="carousel-item active">| A fronteira 8 anos com um novo jeito de informar</div>
                    </div>
                    <div class="col-12 col-sm-4 p-2">
                        <p><i class="fi-xnsuxl-calendar-solid fi-size-l"></i>
                            <?php echo _e("Hoje é ", "afronteira"); echo date("d/m/Y"); ?></p>
                    </div>
                </div>

        </section>

        <section class="container text-center">
            <a class="af-brand" href="<?php echo site_url() ?>">
                <img class="animated zoomIn" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo8anos.png"
                    alt="Afronteira logo">
            </a>
        </section>

        <nav class="navbar navbar-expand-lg navbar-dark bg-af-top-menu animated fadeIn">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/quem-somos">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/category/noticias-recentes">Notícias Recentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/category/cidade">Cidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/category/estadual">Estadual</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/category/nacional">Nacional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/category/mundo">Mundo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url() ?>/contato">Contato</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </form>
                </div>
            </div>
        </nav>

    </header>