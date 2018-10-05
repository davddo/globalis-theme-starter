<?php
namespace Globalis\WP\Templating;

add_filter('the_seo_framework_search_title', __NAMESPACE__ . '\\get_search_title');

function title()
{
    if (is_post_type_archive()) {
        return get_post_type_archive_title();
    } elseif (is_category()) {
        return get_the_blog_category_title();
    } elseif (is_search()) {
        return get_search_title() . trim(get_search_query(false));
    } elseif (is_archive()) {
        return get_the_archive_title();
    } elseif (is_404()) {
        return 'Page introuvable';
    } else {
        return get_the_title();
    }
}


function get_post_type_archive_title()
{
    $post_type = current_post_type();
    $post_type_obj = get_post_type_object($post_type);
    $title = $post_type_obj->labels->name;
    return $title;
}

function get_the_blog_category_title()
{
    $title = sprintf( __( 'Tous les articles %s' ), single_cat_title( '', false ) );
    return $title;
}

function get_search_title()
{
    return 'Résultats de recherche pour : ';
}
