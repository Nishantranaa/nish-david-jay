<?php

/* Theme setup
/*-------------------------------------------- */
if (! function_exists('ourTheme_setup')) {
    function ourTheme_setup() {
        add_theme_support("title-tag");
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_image_size('ourTheme_single',800,493,true);
        add_image_size('ourTheme_big',1400,928,true);
        register_nav_menus( array('header'=> esc_html__('Header','fullbase')));
        load_theme_textdomain('ourTheme', get_template_directory().'/languages');
    }
}
add_action('after_setup_theme','ourTheme_setup');

/*  Include Styles and script
/* ------------------------------------ */
if ( ! function_exists( 'ourTheme_styles_scripts' ) ) {
    function ourTheme_style_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'ourTheme-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );
        wp_enqueue_style( 'ourTheme-sourcesanspro','//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');
        wp_enqueue_style( 'ourTheme-normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css');
        wp_enqueue_style( 'ourTheme', get_template_directory_uri().'/style.css');
    }
}
add_action( 'wp_enqueue_scripts', 'ourTheme_style_scripts' );