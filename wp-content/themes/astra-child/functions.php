<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('astra-theme-css', 'astra-contact-form-7'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);

// END ENQUEUE PARENT ACTION

//------------------------------------------------------------- Gestion des menus -----------------------------------------------------

//----- Avec le hook type de filtre 'wp_nav_menu_args' plus classe que l'utilisation de 'wp_nav_menu_items'------

function switch_menu($args) // Fonction de rappel qui à 1 argument initialisé à vide
{
    if (is_user_logged_in()) { // Si user connecté $args['menu'] pointe vers le menu nommé 'Navigation_logged'.
        $args['menu'] = 'Navigation_logged';
    } else { //Si user non connecté $args['menu'] pointe vers le menu nommé 'Navigation_unlogged'
        $args['menu'] = 'Navigation_unlogged';
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'switch_menu'); //Accrochage de la fonction callback 'switch_menu' au filtre 'wp_nav_menu_args'


/*
//----- Avec le hook type de filtre 'wp_nav_menu_items' ------
function ajout_admin_menu_item($items, $args) // Fonction de rappel qui à 2 arguments : 'les éléments de menu' et 'les arguments du menu'.
{
    if (is_user_logged_in() && $args->theme_location == 'primary') { // Verifie si 'theme_location' est 'primary'(definit dans le resgister) et si user est connecté.
        // Construction du lien Admin:
        $lien_admin = '<li id="menu-item-admin" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="http://localhost/planty/admin/"' . 'class="menu-link"' . '>Admin</a></li>';
        // Concaténation du lien Admin à la liste de liens du menu 'primary':
        $items = $items . $lien_admin;
    }
    return $items; // Retourne le tableaux de liens modifié.
}

add_filter('wp_nav_menu_items', 'ajout_admin_menu_item', 10, 2); //Accrochage de la fonction callback 'ajout_admin_menu_item' au filtre 'wp_nav_menu_items'
*/



//wp_nav_menu('theme-location', 'primary');
