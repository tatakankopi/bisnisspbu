<?php

function bisnisspbu_scripts() {
    // Fonts
    wp_enqueue_style( 'google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap', array(), null );
    wp_enqueue_style( 'google-fonts-material', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null );

    // Tailwind (CDN)
    wp_enqueue_script( 'tailwind-cdn', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false );

    // Main Styles
    wp_enqueue_style( 'bisnisspbu-style', get_template_directory_uri() . '/css/style.css', array(), '1.0' );
    wp_enqueue_style( 'bisnisspbu-main-style', get_stylesheet_uri(), array('bisnisspbu-style'), '1.0' );

    // Scripts
    wp_enqueue_script( 'bisnisspbu-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'bisnisspbu_scripts' );

function bisnisspbu_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bisnisspbu' ),
        'footer'  => __( 'Footer Menu', 'bisnisspbu' ),
    ) );
}
add_action( 'after_setup_theme', 'bisnisspbu_setup' );

// Elementor Support
function bisnisspbu_elementor_support() {
	// Add support for full width
}
