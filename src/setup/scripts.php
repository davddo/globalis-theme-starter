<?php

namespace Globalis\Setup;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts', 100);

function enqueue_scripts()
{
    wp_enqueue_script('project-2018/main', asset_url('scripts/main.js', ASSETS_VERSIONING_SCRIPTS), ['jquery'], null, true);
    // wp_enqueue_script('project-2018/google/maps', 'https://maps.googleapis.com/maps/api/js?libraries=places&key=' . PROJECT_GOOGLE_MAPS_API_KEY, [], null, true);
}
