<?php get_header(); ?>

<?php get_sidebar(); ?>

  <h1>Archive par date</h1>

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
  

        <div class="archive-search-form"><?php get_search_form(); ?></div>

        <h2>Archives par ans:</h2>
        <ul><?php wp_get_archives('type=yearly'); ?></ul>

        <h2>Archives par mois:</h2>
        <ul><?php wp_get_archives('type=monthly'); ?></ul>

        <h2>Archives par categories:</h2>
        <ul><?php wp_list_categories('title_li='); ?></ul>

        <h2>Archives par Auteur:</h2>
        <ul><?php wp_list_authors( ); ?></ul>
      </div><!-- #entry-content -->


<?php get_footer(); ?>
