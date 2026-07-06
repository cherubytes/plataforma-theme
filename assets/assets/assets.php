<?php
//add_filter('use_widgets_block_editor', '__return_false');
add_post_type_support('page', 'excerpt');

include get_template_directory() . '/assets/includes/css-functions.php';
include get_template_directory() . '/assets/includes/js-functions.php';
include get_template_directory() . '/assets/includes/modulos-functions.php';
include get_template_directory() . '/assets/includes/widgets-functions.php';
include get_template_directory() . '/assets/includes/menu-functions.php';
include get_template_directory() . '/assets/modulos/modulo-video/core-video.php';
//include get_template_directory() . '/assets/modulos/modulo-hero/core-modulo-hero.php';
