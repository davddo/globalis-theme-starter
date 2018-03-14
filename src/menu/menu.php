<?php
namespace ASL\WP\Menu;

function print_menu($theme_location, $menu_class, $submenu_class = 'sub-menu', $custom_args = [])
{
    $args = [
        'echo'           => false,
        'theme_location' => $theme_location,
        'menu_class'     => $menu_class,
    ];
    $args = array_merge($args, $custom_args);
    $menu = wp_nav_menu($args);
    if ('sub-menu' !== $submenu_class) {
        $menu = str_replace('class="sub-menu"', 'class="' . $submenu_class . '"', $menu);
    }
    return $menu;
}

function get_menu_by_location($location)
{
    $locations = get_nav_menu_locations();
    if (!in_array($location, array_keys($locations))) {
        return false;
    }
    $menu_id = $locations[$location];
    return wp_get_nav_menu_object($menu_id);
}
