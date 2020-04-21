<h1><?php the_title(); ?></h1>

    <p>Date : <?php the_time('d/m/Y'); ?></p>

    <p>Auteur : <?php the_author(); ?></p>

    <?php the_content(  ); ?> 
    
    <?php comments_template( ); ?>