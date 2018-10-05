<?php

namespace Globalis\WP\Setup;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts', 100);

function enqueue_scripts()
{
    if (!defined('ASSETS_VERSIONING_SCRIPTS')) {
        define('ASSETS_VERSIONING_SCRIPTS', false);
    }
    wp_enqueue_script('project/main', asset_url('scripts/main.js', ASSETS_VERSIONING_SCRIPTS), ['jquery'], null, true);
    // wp_enqueue_script('project/google/maps', 'https://maps.googleapis.com/maps/api/js?libraries=places&key=' . PROJECT_GOOGLE_MAPS_API_KEY, [], null, true);
}
