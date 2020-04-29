<?php
get_header(); 
?>
<main>
    <div class="container archive">
        <h3 class="af-half-border pt-2 mt-5"> <?php single_term_title(); ?></h3>

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

<?php
get_footer(); ?>