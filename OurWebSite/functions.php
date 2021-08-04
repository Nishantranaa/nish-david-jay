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