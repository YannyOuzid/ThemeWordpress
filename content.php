<h1><?php the_title(); ?></h1>

<p>Date : <?php the_time('d/m/Y'); ?></p>

<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>

<p><?php the_tags(); ?></p>

<?php the_content(  ); ?> 

<?php comments_template( ); ?>