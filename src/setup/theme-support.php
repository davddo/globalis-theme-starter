<?php

namespace Globalis\WP\Setup;

add_action('after_setup_theme', __NAMESPACE__ . '\\register_theme_support', 10);

function register_theme_support()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);
}
