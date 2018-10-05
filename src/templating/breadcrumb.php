<?php
namespace Globalis\WP\Templating;

function has_breadcrumb()
{
    static $has_breadcrumb;
    if (!isset($has_breadcrumb)) {
        if (is_front_page()) {
            $has_breadcrumb = false;
        } else {
            $disable_breadcrumb = [];
            if (empty($disable_breadcrumb)) {
                $has_breadcrumb = true;
            } else {
                $current_template = get_page_template();
                $has_breadcrumb = !in_array(basename($current_template), $disable_breadcrumb);
            }
        }
    }
    return $has_breadcrumb;
}


function get_breadcrumb_parts()
{
    $parts = [];
    
    if (is_404()) {
        $parts[] = [ title() ];
    } elseif (is_singular('post')) {
        $parts[] = [ 'Actualités', get_post_type_archive_link('post') ];
        $parts[] = [ title() ];
    } elseif (is_singular('page')) {
        $parts = breadcrumb_parents_parts();
        $parts[] = [ title() ];
    } elseif (is_archive()) {
        //This includes is_post_type_archive(). Difference between is_archive()
        //and is_post_type_archive() is handled in title().
        $parts[] = [ title() ];
    }

    if (!empty($parts)) {
        array_unshift($parts, [ 'Accueil', home_url('/') ]);
    }
    
    return $parts;
}

function breadcrumb_parents_parts()
{
    $parts   = [];
    $parents = array_reverse(get_ancestors(get_the_ID(), 'page'));
    foreach ($parents as $parent_id) {
        $redirect = get_post_meta($parent_id, 'redirect', true);
        if (empty($redirect)) {
            $url = get_permalink($parent_id);
        } else {
            $url = $redirect;
        }
        $parts[] = [get_the_title($parent_id), $url];
    }
    return $parts;
}
