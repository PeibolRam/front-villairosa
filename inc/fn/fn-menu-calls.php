<?php
/**
 * New Menus Integration
 *
 *
 * @link @none
 */
if (!function_exists('get_type_menu')) :

    function get_type_menu($select_menu,  $class_group = '', $class_item = '', $class_href = '')
    {
        $menu_name = $select_menu; // specify custom menu slug
        $locations = get_nav_menu_locations();

        if (!empty($locations) && isset($locations[$menu_name])) {
            $menu = wp_get_nav_menu_object($locations[$menu_name]);
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '';
            $menu_list = '';

            $menu_list .= "\t\t\t\t" . '<ul class="' . $class_group . '">' . "\n";
            foreach ((array) $menu_items as $key => $menu_item) {
                $title = $menu_item->title;
                $url = $menu_item->url;
                $menu_list .= "\t\t\t\t\t" . '<li class="' . $class_item . '"><a class="' . $class_href . '" href="' . $url . '" data-url="' . $url . '">' . $title . '</a></li>' . "\n";
                }
            $menu_list .= "\t\t\t\t" . '</ul>' . "\n";
        } else {
            // $menu_list = '<!-- no list defined -->';
        }

        if (!empty($menu_list)) :
            echo $menu_list;
        endif;
    }

endif;

if (!function_exists('wp_nav_menu_attributes_filter')) :
    function wp_nav_menu_attributes_filter($var)
    {
        return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
    }
endif;

add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
