<?php

namespace Globalis\Setup;

add_action('after_setup_theme', __NAMESPACE__ . '\\register_menus', 10);

function register_menus()
{
    register_nav_menus([
        'header' => 'Menu principal',
        'footer' => 'Pied de page',
    ]);
}
