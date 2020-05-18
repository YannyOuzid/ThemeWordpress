<?php

//Ajout des photos pour les articles//
add_theme_support('post-thumbnails');


//Fonction pour la création de la SideBar et utilisation des widgets//
function devlab_sidebar() {
	
	register_sidebar(
	
		array(
			'id' => 'devlab_sidebar',
			'name' => __( "Sidebar du devlab" ),
			'description' => __( 'Contenu de la Sidebar' ),
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
    );
    
	
}

add_action( 'widgets_init', 'devlab_sidebar' );


//Fonction de redirection de la page 404//
/*function page404_redirection()
{
 global $mapage;
 if(is_404())
 {
 wp_redirect(home_url("404"));
 exit;
 }
}
 
add_action('wp', 'page404_redirection',1);*/


//Fonction pour la NavBar //
register_nav_menus( array(
    'menu-principal' => 'Menu principal'
	) );
	



/**
** Création d'un template de page
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


// Filter except length to 20 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
?>

