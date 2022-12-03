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

// Ajouter le logo
add_theme_support('custom-logo');

// Hooks
add_filter( 'upload_mimes', 'capitaine_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types( $types, $file, $filename, $mimes ) {
	if ( false !== strpos( $filename, '.webp' ) ) {
    	$types['ext'] = 'webp';
   		$types['type'] = 'image/webp';
	}
	return $types;
}

function header_function() {
    register_nav_menu('header',__( 'Main navigation' ));
}
add_action( 'init', 'header_function' );

add_image_size( 'test', 650, 650, true);