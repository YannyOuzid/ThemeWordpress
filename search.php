<?php get_header(); ?>

<div class="row">

    <div class="col-sm-12">

        <div class="container">

        <div class="text-center">

            <h2>Recherche</h2>

        </div>

        <hr>

        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>

            <article style="padding-right:20px">

                <div class="card" style="width: 18rem; background-color: black; border-color: #F06449" >
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>
                            <p class="card-text"><?php the_tags(); ?></p>
                            <p class="card-text">Date : <?php the_time('d/m/Y'); ?></p>
                            <p class="card-text"><?php the_excerpt(  ); ?> </p>
                            <a href="<?php the_permalink( ); ?>" class="btn btn-primary btn-block">Lire</a>
                        </div>
                    </div>

            </article>

            <?php endwhile; ?>   

        </div>


        </div>
    </div> 

</div>

<?php get_footer(); ?>