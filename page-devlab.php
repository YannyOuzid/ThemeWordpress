	<?php
	/*
	Template name: DevLab
	*/
	?>

	<?php get_header(); ?>

	<div class="row">

		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    
			<?php

				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
					get_template_part( 'content', get_post_format() );
				
				endwhile; endif;

			?>

		</div> 

	</div>

	<?php get_footer(); ?>