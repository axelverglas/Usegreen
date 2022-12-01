<?php
//Chargement CSS et JS
function usegreen_register_assets() {
    
    // Déclarer le JS
    if( is_page( 'accueil' ) ){
        wp_enqueue_script( 
            'usegreen', 
            get_template_directory_uri() . '/assets/js/script.js', 
            array(),
            null,
            true
        );
    }

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'usegreen',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'usegreen_register_assets' );

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Ajouter le logo
add_theme_support('custom-logo');

// Prise en charge SVG
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

function header_function() {
    register_nav_menu('header',__( 'Main navigation' ));
}
add_action( 'init', 'header_function' );