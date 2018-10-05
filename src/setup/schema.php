<?php

namespace Globalis\WP\Setup;

// define('GLOBALIS_POST_TYPE_EXAMPLE', 'example-post-type');
// define('GLOBALIS_TAXONOMY_EXAMPLE', 'example-taxonomy');

// add_action('init', __NAMESPACE__ . '\\register_post_type_example', 0);
// add_action('init', __NAMESPACE__ . '\\register_taxonomy_example', 0);

// function register_post_type_example()
// {
//     $labels = [
//         'name'               => 'Témoignages',
//         'menu_name'          => 'Témoignages',
//         'singular_name'      => 'Témoignage',
//         'name_admin_bar'     => 'Témoignage',
//         'all_items'          => 'Tous les témoignages',
//         'archives'           => 'Liste des témoignages',
//         'parent_item_colon'  => 'Témoignage parent :',
//         'add_new_item'       => 'Ajouter un témoignage',
//         'add_new'            => 'Ajouter',
//         'new_item'           => 'Nouveau témoignage',
//         'edit_item'          => "Modifier le témoignage",
//         'update_item'        => "Mettre à jour le témoignage",
//         'view_item'          => "Afficher le témoignage",
//         'search_items'       => 'Rechercher un témoignage',
//         'not_found'          => 'Aucun témoignage trouvé',
//         'not_found_in_trash' => 'Aucun témoignage trouvé dans la corbeille',
//         'view_items'         => 'Voir les témoignages',
//     ];
//     $args = [
//         'label'               => 'Témoignages',
//         'description'         => 'Témoignages',
//         'menu_icon'           => 'dashicons-megaphone',
//         'supports'            => ['title', 'editor', 'thumbnail'],
//         'labels'              => $labels,
//         'taxonomies'          => [],
//         'hierarchical'        => false,
//         'public'              => false,
//         'show_ui'             => true,
//         'show_in_menu'        => true,
//         'menu_position'       => 20,
//         'show_in_admin_bar'   => true,
//         'show_in_nav_menus'   => true,
//         'can_export'          => true,
//         'has_archive'         => true,
//         'exclude_from_search' => false,
//         'publicly_queryable'  => false,
//     ];
//     register_post_type(GLOBALIS_POST_TYPE_EXAMPLE, $args);
// }

// function register_taxonomy_example()
// {
//     $labels = [];
//     $args = [];
//     register_taxonomy(GLOBALIS_TAXONOMY_EXAMPLE, GLOBALIS_POST_TYPE_EXAMPLE, $args);
// }
