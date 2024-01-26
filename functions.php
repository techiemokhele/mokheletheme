<?php

if (!function_exists('mokhele_theme_support')) :

    /** 
     *  Sets up theme defaults and registers support for various WordPress features.
     * 
     *  @since My theme name 1.0
     * 
     * @return void
     */
    function mokhele_theme_support()
    {

        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    }

endif;
add_action('wp_enqueue_scripts', 'mokhele_theme_support');
