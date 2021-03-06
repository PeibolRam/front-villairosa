<?php

if (!function_exists('villairosa_ahoy')) {
    function villairosa_ahoy()
    {
        load_theme_textdomain('villairosa', get_stylesheet_directory() . '/languages');
        add_theme_support('post-thumbnails');
        // wp menus
        add_theme_support('menus');
        register_nav_menus(
            [
                'main-nav' => __('Main Menu', 'villairosa'),
            ]
        );

        add_action('init', 'head_cleanup');
    }

    add_action('after_setup_theme', 'villairosa_ahoy', 99);

    if (!function_exists('head_cleanup')) {
        function head_cleanup()
        {
            // category feeds
            remove_action('wp_head', 'feed_links_extra', 3);
            // post and comments feeds
            remove_action('wp_head', 'feed_links', 2);
            // EditURI Link
            remove_action('wp_head', 'rsd_link');
            // windows live writer
            remove_action('wp_head', 'wlwmanifest_link');
            // index link
            remove_action('wp_head', 'index_rel_link');
            // previous link
            remove_action('wp_head', 'parent_post_rel_link', 10, 0);
            // start link
            remove_action('wp_head', 'start_post_rel_link', 10, 0);
            // link for adjacent posts
            remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
            //WP Version
            remove_action('wp_head', 'wp_generator');


            // all actions related to emojis
            remove_action('admin_print_styles', 'print_emoji_styles');
            remove_action('wp_head', 'print_emoji_detection_script', 7);
            remove_action('admin_print_scripts', 'print_emoji_detection_script');
            remove_action('wp_print_styles', 'print_emoji_styles');
            remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
            remove_filter('the_content_feed', 'wp_staticize_emoji');
            remove_filter('comment_text_rss', 'wp_staticize_emoji');


            // Remove Nonses AdminBar
            add_filter('show_admin_bar', '__return_false');
        }
    }
}
