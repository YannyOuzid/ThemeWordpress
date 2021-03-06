    <?php get_header(); ?>

    <?php get_sidebar(); ?>

        <div class="container">

            <div class="text-center">

                <h2>Archives par  <?php the_tags();?></h2>

            </div>

            <hr>

            <div class="row-extended">

                <?php while ( have_posts() ) : the_post(); ?>

                <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">

                    <article>

                        <div class="card card-article">

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

                </div>
     
                <?php endwhile; ?> 

            </div>    
        
        </div>

    <?php get_footer(); ?>