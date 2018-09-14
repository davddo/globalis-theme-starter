<?php

namespace Globalis\Setup;

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
            'page_title'      => 'Options de l\'application',
            'menu_title'      => 'Options',
            'menu_slug'       => 'globalis-options',
            'capability'      => 'manage_options',
            'parent_slug'     => '',
            'position'        => 75,
            'icon_url'        => 'dashicons-admin-generic',
            'redirect'        => false,
            'post_id'         => 'options',
            'autoload'        => true,
            'update_button'   => 'Mettre à jour',
            'updated_message' => 'Paramètres mis à jour',
    ]);
}
