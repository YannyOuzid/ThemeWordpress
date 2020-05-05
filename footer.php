
<footer>
<p>Footer </p>

<div class="archive-search-form"><?php get_search_form(); ?></div>

        <h2>Archives par ans:</h2>
        <ul><?php wp_get_archives('type=yearly'); ?></ul>

        <h2>Archives par mois:</h2>
        <ul><?php wp_get_archives('type=monthly'); ?></ul>

        <h2>Archives par categories:</h2>
        <ul><?php wp_list_categories('title_li='); ?></ul>

        <h2>Archives par Auteur:</h2>
        <ul><?php wp_list_authors( ); ?></ul>
      </div>

</footer>

</body>
</html>