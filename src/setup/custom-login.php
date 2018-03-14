<?php

namespace ASL\WP\Setup;

add_action('wpg_custom_login_css', __NAMESPACE__ . '\\custom_login_image_size', 10);

function custom_login_image_size($css)
{
    return str_replace('min-height: 100px;', 'min-height: 140px;', $css);
}
