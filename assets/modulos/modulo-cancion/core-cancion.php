<?php
function registrar_cpt_videos() {
    $labels = array(
        'name'                  => 'Videos',
        'singular_name'         => 'Video',
        'menu_name'             => 'Videos',
        'add_new'               => 'Añadir nuevo',
        'add_new_item'          => 'Añadir nuevo Video',
        'new_item'              => 'Nuevo Video',
        'edit_item'             => 'Editar Video',
        'view_item'             => 'Ver Video',
        'all_items'             => 'Todos los Videos',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-video-alt3',
        'rewrite'            => array('slug' => 'videos'),
        'show_in_rest'       => true,
        'supports'           => array( 'title','excerpt', 'thumbnail'),
        'menu_position'      => 5,
    );

    register_post_type('videos', $args);
}
add_action('init', 'registrar_cpt_videos');

// Registrar Taxonomía (Artistas)
function registrar_taxonomia_artista_video() {
    register_taxonomy(
        'artista_video',
        'videos',
        array(
            'label'        => 'Artista',
            'rewrite'      => array( 'slug' => 'artista' ),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'registrar_taxonomia_artista_video');