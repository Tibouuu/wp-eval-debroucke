<?php
/**
 * This file is part of the AmphiBee package.
 * (c) AmphiBee <contact@amhibee.fr>
 */


namespace Hotel;

class PostType
{
    public const SLUG = 'chambres';

    public function register(): void
    {
        add_action('init', function () {
            $labels = array(
                // Le nom au pluriel
                'name'               => _x('Chambres', 'Post Type General Name'),
                // Le nom au singulier
                'singular_name'      => _x('Chambre', 'Post Type Singular Name'),
                // Le libellé affiché dans le menu
                'menu_name'          => __('Chambres'),
                'name_admin_bar' => "Chambres",
                // Les différents libellés de l'administration
                'all_items'          => __('Toutes les chambres'),
                'view_item'          => __('Voir la chambre'),
                'add_new_item'       => __('Ajouter une nouvelle chambre'),
                'add_new'            => __('Ajouter'),
                'edit_item'          => __('Editer la chambre'),
                'update_item'        => __('Modifier la chambre'),
                'search_items'       => __('Rechercher une chambre'),
                'not_found'          => __('Non trouvée'),
                'not_found_in_trash' => __('Non trouvée dans la corbeille'),
            );

            // On peut définir ici d'autres options pour notre custom post type

            $args = array(
                'label'        => __('Chambres'),
                'description'  => __('Mes chambres'),
                'labels'       => $labels,
                // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
                'supports'     => array(
                    'title',
                    'excerpt',
                    'content',
                    'editor',
                    'thumbnail',
                    'custom-fields',
                ),
                /* 
                * Différentes options supplémentaires
                */
                'show_in_rest' => true,
                'hierarchical' => false,
                'public'       => true,
                'has_archive'  => true,
                'show_in_nav_menus' => true,
                'rewrite'      => array('slug' => self::SLUG),
            );

            register_post_type(self::SLUG, $args);
        });
    }
}
