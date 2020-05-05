<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>

   
</head>

<body>

	<header>
		 <nav id="navigation-principale" role="navigation">
    		<?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
    	</nav>

    	<div class="search-header">
    		<?php get_search_form( ) ?>    
   		</div>
	</header>