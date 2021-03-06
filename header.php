<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo get_bloginfo( 'name' ); ?></title>

        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    <body <?php body_class(); ?>>
        <div class="header">
            <div id="menu-mobile" onclick="this.classList.toggle('change')">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );  ?>
            </nav>
            
        </div>
