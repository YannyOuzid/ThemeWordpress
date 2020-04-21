<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>

    <nav id="navigation-principale" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
    </nav>

    <div class="search-header">

    <?php get_search_form( ) ?>
    
    </div>
</head>

<body>