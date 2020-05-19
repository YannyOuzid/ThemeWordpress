    <div class="text-center">

        <h1 class="mt-10"><?php the_title(); ?></h1>

        <img src="<?php echo get_the_post_thumbnail_url(); ?>">

    </div>

    </br>

    <div class="container">

        <div class="justify-content-center">

            <div class="card card-content">

                <div class="card-body">

                    <p class="card-text">Date : <?php the_time('d/m/Y'); ?></p>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>
                    <p class="card-text"><?php the_tags(); ?></p>

                </div>
                
            </div>
        
        </div>

    </div>
    

    </br>

    <div class="container">

        <?php the_content( ); ?>        

    </div>

    <?php comments_template( ); ?>