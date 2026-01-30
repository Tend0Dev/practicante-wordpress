<?php

function practicante_theme_setup() {
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'main_menu' => 'Menú Principal'
    ]);
}

add_action('after_setup_theme', 'practicante_theme_setup');

require get_template_directory() . '/widget-cta.php';

function practicante_register_widgets() {
    register_widget('Practicante_CTA_Widget');
}

add_action('widgets_init', 'practicante_register_widgets');