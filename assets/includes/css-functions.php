<?php
function css_functions() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), null);
    wp_register_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css', array(), null);
    wp_register_style('fuente-nova', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap', array(), null);
    wp_register_style('glightbox', get_template_directory_uri() . '/assets/includes/vendors/glightbox/glightbox.min.css', array(), null);
    wp_register_style('swiper', get_template_directory_uri() . '/assets/includes/vendors/swiper/swiper-bundle.min.css', array(), null);
    wp_register_style('aos', get_template_directory_uri() . '/assets/includes/vendors/aos/aos.css', array(), null);
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/style.css', array(), null);
    //wp_register_style('nav-css', get_template_directory_uri() . '/assets/templates/navs/nav.css', array(), null);


    wp_enqueue_style('fuente-nova');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('estilos');
    //wp_enqueue_style('nav-css');
}
add_action('wp_enqueue_scripts', 'css_functions');

 /*assets styles*/