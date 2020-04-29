<?php
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); 
?>
<main>
    <div class="container">
		<h3 class="af-half-border pt-2 mt-5"> <?php printf( __( 'Resultados da pesquisa: %s'), get_search_query() ); ?></h3>

        <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>

        <?php
				get_template_part( 'template-parts/archive', get_post_format() );
				?>

        <?php

			endwhile; // End of the loop.
			?>
    </div>
</main>