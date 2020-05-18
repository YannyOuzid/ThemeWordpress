
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
					<ul>
						<li><a href="">Index du site</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Conditions générales d'utilisation</a></li>
						<li><a href="">Politique de confidentialité</a></li>
						<li><a href="">Contactez-nous</a></li>
					</ul>
					<hr>
					<div class="text-center">
						<h5>Lien(s) externe(s)</h5>
					</div>
					<ul style="margin-top: 10px;">
						<li><a href="">Pôle Universitaire Leonard de Vinci</a></li>
						<li><a href="">Institut de l'Internet et du Multimédia</a></li>
						<li><a href="">Le Dev'Lab</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
					<div class="text-center">
						<h2>Archives</h2>
					</div>
					<hr>
        			<h5 style="padding-top: 20px;">Archives par année(s) :</h5>
			        <ul><?php wp_get_archives('type=yearly'); ?></ul>
			        <h5 style="margin-top: 5px;">Archives par mois :</h5>
			        <ul><?php wp_get_archives('type=monthly'); ?></ul>
			        <h5 style="margin-top: 5px;">Archives par categories :</h5>
			        <ul><?php wp_list_categories('title_li='); ?></ul>	
			        <h5 style="margin-top: 5px;">Archives par auteur(s) :</h5>
			        <ul><?php wp_list_authors( ); ?></ul>				
				</div>
			</div>
		</div>
		<div class="container-fluid footer-text footer-class">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="text-center">
					<h6>Sponsorisé par l'Institut de l'Internet et du Multimédia ©.</h6>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>