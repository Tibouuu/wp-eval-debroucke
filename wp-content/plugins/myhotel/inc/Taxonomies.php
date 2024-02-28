<?php
/**
 * This file is part of the AmphiBee package.
 * (c) AmphiBee <contact@amhibee.fr>
 */


namespace Hotel;

class Taxonomies
{
    public function register()
    {
        add_action('init', [$this, 'beds']);
        add_action('init', [$this, 'gamme']);
    }
    
    public function beds()
    {
        $labels = array(
            'name' => 'Type de lit',
            'singular_name' => 'Type de lit',
            'menu_name' => 'Type de lit',
            'all_items' => 'Tous les types de lit',
            'edit_item' => 'Editer type de lit',
            'view_item' => 'Voir type de lit',
            'update_item' => 'Mettre à jour type de lit',
            'add_new_item' => 'Ajouter un type de lit',
            'new_item_name' => 'Nouveau type de lit',
            'search_items' => 'Rechercher un type de lit',
            'popular_items' => 'Types de lit populaires',
            'separate_items_with_commas' => 'Séparer les types de lit avec des virgules',
            'add_or_remove_items' => 'Ajouter ou supprimer des types de lit',
            'choose_from_most_used' => 'Choisir parmi les types de lit les plus utilisés',
            'not_found' => 'Aucun type de lit trouvé'
        );


        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_tagcloud' => true,
            'show_in_nav_menus' => true,
            'rewrite' => ['slug' => 'type-lit'],
        );

    register_taxonomy('type_lit', 'chambres', $args);
    }

    public function gamme()
    {
        $labels = array(
            'name' => 'Gammes de tarif',
            'singular_name' => 'Gamme de tarif',
            'menu_name' => 'Gamme de tarif',
            'all_items' => 'Toutes les gammes de tarifs',
            'edit_item' => 'Editer gamme de tarif',
            'view_item' => 'Voir gamme de tarif',
            'update_item' => 'Mettre à jour gamme de tarif',
            'add_new_item' => 'Ajouter une gamme de tarif',
            'new_item_name' => 'Nouvelle gamme de tarif',
            'search_items' => 'Rechercher une gamme de tarif',
            'popular_items' => 'Types de gammes de tarif',
            'separate_items_with_commas' => 'Séparer les gammes de tarif avec des virgules',
            'add_or_remove_items' => 'Ajouter ou supprimer des gammes de tarifs',
            'choose_from_most_used' => 'Choisir parmi les gammes de tarif les plus utilisés',
            'not_found' => 'Aucune gamme de tarif trouvé'
        );


        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_tagcloud' => true,
            'show_in_nav_menus' => true,
            'rewrite' => ['slug' => 'gamme'],
        );

        register_taxonomy('gamme', 'chambres', $args);
    }
}
