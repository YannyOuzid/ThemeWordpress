

<?php get_header(); ?>

<div class="row">

<div class="col-sm-12">

<p>Page de recherche</p>



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



</div> 

</div>

<?php get_footer(); ?>