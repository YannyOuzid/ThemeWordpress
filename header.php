<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">   
</head>

<body>

	<header>       


            <h1><?php bloginfo( 'name' ); ?></h1>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 
                                        'menu_id' => 'navbar_devlab',
                                        'menu_class' => "navbar navbar-light;",
                                        'menu_style' => "background-color:#e3f2fd;",
                                        ) ); ?>


	</header>