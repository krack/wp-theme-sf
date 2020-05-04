<?php 

require get_parent_theme_file_path( '/inc/customizer.php' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");

wp_enqueue_script( 'sellesfrancais-menu', get_template_directory_uri() .'/js/menu.js', array(), null, true);

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


  
function gkp_add_slug_body_class( $classes ) 
{
   
   if ( is_page() ) 
   {
	global $post;
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
	
    return $classes;
}
add_filter( 'body_class', 'gkp_add_slug_body_class' );