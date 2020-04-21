<?php get_header(); ?>

<main>


    <h1><?php bloginfo( 'name' ); ?></h1>

    <?php get_sidebar( ); ?>

    <?php while(have_posts(  )) : the_post(  ); ?>



    <article>

    <a href="<?php the_permalink( ); ?>">
    <?php the_post_thumbnail(); ?>
    <h2><?php the_title(); ?></h2>
    </a>
    <p>Date : <?php the_time('d/m/Y'); ?></p>

    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>

    <p><?php the_tags(); ?></p>
    <?php the_excerpt(  ); ?> 
    <a href="<?php the_permalink( ); ?>">
    Lire
    </a>

    </article>
    

    <?php endwhile ?>

</main>

<?php get_footer(); ?>

