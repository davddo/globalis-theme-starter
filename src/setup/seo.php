<?php

namespace Globalis\Setup;

add_filter('the_seo_framework_indicator', '__return_false');

add_filter('the_seo_framework_metabox_priority', function ($priority) {
    return 'low';
});

add_action('after_setup_theme', __NAMESPACE__ . '\\the_seo_framework_fix_search_url', 100);

function the_seo_framework_fix_search_url()
{
    if (function_exists('Roots\\Soil\\NiceSearch\\rewrite')) {
        add_filter('the_seo_framework_ld_json_search_url', 'Roots\\Soil\\NiceSearch\\rewrite');
    }
}
