<?php
get_header(); ?>
<main>
    <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
				<div class="container">
				<?php
				get_template_part( 'template-parts/content', get_post_format() );
				?>
				</div>
				<?php

			endwhile; // End of the loop.
			?>
</main>