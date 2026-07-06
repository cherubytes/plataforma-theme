<?php
add_filter('use_widgets_block_editor', '__return_false');

function zona_widget() {

    /* Zona widget simple para el footer */
    register_sidebar( array(
        'name'          => 'Footer Simple',
        'id'            => 'footer_simple',
        'before_widget' => '<div class="footer-simple">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-titulo">',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'zona_widget');
?>