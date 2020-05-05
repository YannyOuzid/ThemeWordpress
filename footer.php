
	<footer>		
		<div class="container">
			<hr>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<div class="text-center">
						<h2>Informations</h2>
					</div>
					<hr>


				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<div class="text-center">
						<h2>Sitemap</h2>
					</div>
					<hr>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<div class="text-center">
						<h2>Archives</h2>
					</div>
					<hr>
					<div class="archive-search-form"><?php get_search_form(); ?></div>
        			<h5>Archives par année(s) :</h5>
			        <ul><?php wp_get_archives('type=yearly'); ?></ul>
			        <h5>Archives par mois :</h5>
			        <ul><?php wp_get_archives('type=monthly'); ?></ul>
			        <h5>Archives par categories :</h5>
			        <ul><?php wp_list_categories('title_li='); ?></ul>
			        <h5>Archives par auteur :</h5>
			        <ul><?php wp_list_authors( ); ?></ul>	    			
				</div>
			</div>
		</div>
		<div class="container-fluid footer-text">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="text-center">
					<h6>Sponsorisé par l'Institut de l'Internet et du Multimédia ©.</h6>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>