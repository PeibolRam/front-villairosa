<?php
if (!function_exists('scripts_and_styles')) {
    function scripts_and_styles()
    {
        if (!is_admin()) {
            global $prefix, $wp_scripts;


            // Call Styles
            wp_enqueue_style(
                'styles',
                get_template_directory_uri() . '/dist/app.css',
                false,
                date('ymdHis', filemtime(get_template_directory() . '/dist/app.css')),
            );

            // Register Scripts JS
            wp_register_script(
                'app-js',
                get_template_directory_uri() . '/dist/app.js',
                array('jquery', 'jquery-migrate'),
                date('ymdHis', filemtime(get_template_directory() . '/dist/app.js')),
                true
            );
         
            wp_register_script(
                'custom',
                get_template_directory_uri() . '/inc/js/custom.js',
                array(),
                'v1.0',
                true
            );
            wp_register_script(
                'map',
                get_template_directory_uri() . '/inc/js/map.js',
                array(),
                'v1.0',
                true
            );




            // // Call Scripts JS
            
            //     wp_enqueue_script('wow');
            wp_enqueue_script('custom');
            wp_enqueue_script('map');
            //     wp_enqueue_script('retina');
            //     wp_enqueue_script('jquery13');
            //     wp_enqueue_script('mapbox');
            //     wp_enqueue_script('mapbox-config');
            //     wp_enqueue_script('mapbox-espana');
            //     wp_enqueue_script('popup');
            //     // wp_enqueue_script('carousel');
           
            
            wp_enqueue_script('app-js');
        }
    }

    add_action('wp_enqueue_scripts', 'scripts_and_styles', 15);
}
