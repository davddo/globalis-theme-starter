<?php

namespace ASL\WP\Setup;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_scripts', 100);

function enqueue_scripts()
{
    wp_enqueue_script('aslc-2018/main', asset_url('scripts/main.js', ASSETS_VERSIONING_SCRIPTS), ['jquery'], null, true);
    // wp_localize_script('aslc-2018/main', 'aslcConfig', [
    //     'images_path'   => \ASL\WP\Setup\asset_url('images'),
    //     'api_url'       => ASLC_API_URL,
    // ]);

    // wp_enqueue_script('clea-2018/google/maps', 'https://maps.googleapis.com/maps/api/js?libraries=places&key=' . CLEA_GOOGLE_MAPS_API_KEY, [], null, true);
}
