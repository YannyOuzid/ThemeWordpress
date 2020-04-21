<?php get_header(); ?>

<?php get_sidebar(); ?>

    <h1>Auteur</h1>

    <?php while ( have_posts() ) : the_post(); ?>

    <article>

    <a href="<?php the_permalink( ); ?>">
    <?php the_post_thumbnail(); ?>
    <h2><?php the_title(); ?></h2>
    </a>
    <?php the_excerpt(  ); ?> 
    <a href="<?php the_permalink( ); ?>">
    Lire
    </a>

    </article>
 
    <?php endwhile; ?>             


<?php get_footer(); ?>
