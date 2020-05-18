<?php get_header(); ?>

<?php get_sidebar(); ?>

    <h1>Categories</h1>

    <div class="row">

    <?php while ( have_posts() ) : the_post(); ?>

    

    <article style="padding-right:20px">

    <div class="card" style="width: 18rem; background-color: black; border-color: #F06449" >
        <img class="card-img-top" src="..." alt="Card image cap">
  
        <a href="<?php the_permalink( ); ?>">
        <?php the_post_thumbnail(); ?>
        </a>

        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>
            <p class="card-text"><?php the_tags(); ?></p>
            <p class="card-text">Date : <?php the_time('d/m/Y'); ?></p>
            <p class="card-text"><?php the_excerpt(  ); ?> </p>
            <a href="<?php the_permalink( ); ?>" class="btn btn-primary">Lire</a>
        </div>
    </div>

    </article>
 
    <?php endwhile; ?>             

    </div>


<?php get_footer(); ?>
