<?php

namespace Globalis\Setup;

add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_styles', 100);

function enqueue_styles()
{
    wp_enqueue_style('project-2018/main', asset_url('styles/main.css', ASSETS_VERSIONING_STYLES), [], null);
}

add_theme_support('admin-bar', ['callback' => function () {
?>
    <style type="text/css" media="screen">
        @media screen and ( min-width: 783px ) {
            html { margin-top: 32px !important; }
            * html body { margin-top: 32px !important; }
            html body header, html body div.breadcrumbs {
                margin-top: 32px !important;
            }
        }
        @media screen and ( max-width: 782px ) {
            #wpadminbar {
                display: none;
            }
        }
        @media screen and ( max-width: 1200px ) {
            #wp-admin-bar-sage_template,
            #wp-admin-bar-new-content {
                display: none;
            }
        }
    </style>
<?php
}]);
