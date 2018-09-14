<?php

namespace Globalis\Setup;

function asset_url($file, $versioning = false)
{
    $path = get_template_directory_uri() . '/dist/' . $file;

    if ($versioning) {
        $version = get_assets_version();
        if (false != $version && !empty($version)) {
            $path = str_replace(['.css', '.js'], ['-' . $version . '.css', '-' . $version . '.js'], $path);
        }
    }

    return $path;
}

function get_assets_version()
{
    static $version;

    if (!isset($version)) {
        $version_path = get_template_directory() . '/dist/version';
        if (!file_exists($version_path)) {
            $version = false;
        } else {
            $version = intval(file_get_contents($version_path));
        }
    }

    return $version;
}
