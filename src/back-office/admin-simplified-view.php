<?php

namespace Globalis\WP\Admin;

add_action('admin_head', __NAMESPACE__ . '\\admin_simplified_css', 999);
add_action('wp_head', __NAMESPACE__ . '\\admin_simplified_css', 999);
add_action('admin_menu', __NAMESPACE__ . '\\admin_simplified_add_menus', 999);
add_action('admin_bar_menu', __NAMESPACE__ . '\\admin_simplified_hide_environment_info', 999);
add_filter('user_has_cap', __NAMESPACE__ . '\\admin_simplified_disable_query_monitor', 999, 4);

function is_admin_simplified_view()
{
    if (!function_exists('get_field')) {
        return false;
    }
    if (!is_admin() && !is_admin_bar_showing()) {
        return false;
    }
    if (!is_user_logged_in()) {
        return false;
    }
    if (defined('DOING_AJAX') && DOING_AJAX) {
        return false;
    }
    if (true !== get_field('admin_simplified_view', 'user_' . get_current_user_id())) {
        return false;
    }
    return true;
}

function admin_simplified_css()
{
    if (!is_admin_simplified_view()) {
        return;
    }
    ?>
    <style type="text/css">
        #adminmenu #menu-media { display: none; }
        #adminmenu #menu-plugins { display: none; }
        #adminmenu #menu-tools { display: none; }
        #adminmenu #menu-appearance { display: none; }
        #adminmenu #toplevel_page_edit-post_type-acf-field-group { display: none; }
        #adminmenu #toplevel_page_theseoframework-settings { display: none; }
        #adminmenu #menu-settings { display: none; }
        #adminmenu #menu-users { display: none; }
        #adminmenu #menu-comments { display: none; }
        #wp-admin-bar-site-name #wp-admin-bar-themes { display:none; }
        #wp-admin-bar-new-content #wp-admin-bar-new-media { display: none; }
        #wp-admin-bar-new-content #wp-admin-bar-new-user { display: none; }
        #wp-admin-bar-sage_template { display: none; }
        #toplevel_page_itsec { display: none; }
    </style>
    <?php
}

function admin_simplified_add_menus()
{
    if (!is_admin_simplified_view()) {
        return;
    }
    add_menu_page('Menus', 'Menus', 'edit_theme_options', 'nav-menus.php', '', 'dashicons-menu', 60);
}

function admin_simplified_hide_environment_info($wp_admin_bar)
{
    if (!is_admin_simplified_view()) {
        return;
    }
    foreach ($wp_admin_bar->get_nodes() as $node) {
        if ('website-env' === $node->parent) {
            $wp_admin_bar->remove_node($node->id);
        }
    }
}

function admin_simplified_disable_query_monitor($allcaps, $caps, $args, $user)
{
    if (!function_exists('get_field')) {
        return $allcaps;
    }
    if (!isset($args[0]) || 'view_query_monitor' !== $args[0]) {
        return $allcaps;
    }
    if (!isset($args[1]) || true !== get_field('admin_simplified_view', 'user_' . $args[1])) {
        return $allcaps;
    }
    foreach ((array) $caps as $cap) {
        if (isset($allcaps[$cap])) {
            unset($allcaps[$cap]);
        }
    }
    return $allcaps;
}
