<?php

if (!function_exists('mokhele_theme_support')) :

    function mokhele_theme_support()
    {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('popper'), null, true);
    }

    add_action('wp_enqueue_scripts', 'mokhele_theme_support');

endif;
