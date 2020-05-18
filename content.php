<div class="text-center"><h1><?php the_title(); ?></h1></div>

<div class="card" style="width: 18rem; background-color: transparent; border-color: #F06449">
  <div class="card-body">
    
    <p class="card-text">Date : <?php the_time('d/m/Y'); ?></p>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">Auteur : <?php the_author(); ?></a>
    <p class="card-text"><?php the_tags(); ?></p>
  </div>
</div>


<?php the_content(  ); ?> 

<?php comments_template( ); ?>