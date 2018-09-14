<?php

namespace Globalis\Setup;

add_action('after_setup_theme', __NAMESPACE__ . '\\register_image_sizes', 10);

function register_image_sizes()
{
	// set_post_thumbnail_size(580, 475);
    // add_image_size('clea-square', 500, 500);
}
