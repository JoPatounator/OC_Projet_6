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

//------------------------------------------------------------- Gestion du lien "Admin" menus -----------------------------------------------------

//-------------------------------------------------- Utilisation hook type de filtre 'wp_nav_menu_items' -------------------------------------------
function ajout_admin_menu_item($items, $args) // Fonction de rappel qui à 2 arguments : 'les éléments de menu' et 'les arguments du menu'.
{
    if (is_user_logged_in() && $args->theme_location == 'primary') { // Verifie si 'theme_location' est 'primary'(definit dans le resgister) et si user est connecté.
        // Construction des liens Admin:
        $lien_admin = '<li id="menu-item-admin" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-admin"><a href="http://localhost/planty/admin/"' . 'class="menu-link"' . '>Admin</a></li>';
        // Concaténation du lien Admin à la liste de liens du menu 'primary':
        $items = $items . $lien_admin;
    }
    return $items; // Retourne le tableaux de liens modifié.
}

add_filter('wp_nav_menu_items', 'ajout_admin_menu_item', 10, 2); //Accrochage de la fonction callback 'ajout_admin_menu_item' au filtre 'wp_nav_menu_items'


// --------------------------------------------- Ajout gestion footer selon l'ID de page -----------------------------------------------------
function   switch_footer_on_page_ID()
{
    $id_page = get_the_ID();
    $id_cible_1 = 21;
    $id_cible_2 = 23;
    if ($id_page == $id_cible_1) {
        echo "<div class='image_footer_container_rencontre'>";
        echo "<img class='image_footer' src='http://localhost/planty/wp-content/uploads/2024/12/Mask-group-4.png' alt='Frise en canettes de Planty'>";
        echo "</div>";
        echo "<div class='footer_mentions_legales'>";
        echo "<p>Mentions légales</p>";
        echo "</div>";
    } elseif ($id_page == $id_cible_2) {
        echo "<div class='footer_mentions_legales'>";
        echo "<p>Mentions légales</p>";
        echo "</div>";
    } else {
        echo "<div class='image_footer_container'>";
        echo "<img class='image_footer' src='http://localhost/planty/wp-content/uploads/2024/12/Mask-group-4.png' alt='Frise en canettes de Planty'>";
        echo "</div>";
        echo "<div class='footer_mentions_legales'>";
        echo "<p>Mentions légales</p>";
        echo "</div>";
    }
}

add_action('wp_footer', 'switch_footer_on_page_ID', 10, 0);

/*----------------------------------------- Astra suppression header --------------------------------------*/
/*
add_action('wp', 'astra_remove_header');

function astra_remove_header()
{
    remove_action('astra_primary_header', array(Astra_Builder_Header::get_instance(), 'primary_header'));
    remove_action('astra_mobile_primary_header', array(Astra_Builder_Header::get_instance(), 'mobile_primary_header'));
}
    */

//-------------------------------------------- Widget afficheMenuWidget  ---------------------------------------------
// Enregistrer et charger les widgets

include_once(__DIR__ . '/widgets/afficheMenuWidget.php');
//include_once(__DIR__ . '/widgets/afficheMenuWidgetMobile.php');
function affiche_menu_charge_widget()
{
    register_widget('Affiche_Menu_Widget');
}
add_action('widgets_init', 'affiche_menu_charge_widget');

/*function affiche_menu_charge_widget_mobile()
{
    register_widget('Affiche_Menu_Widget_Mobile');
}
add_action('widgets_init', 'affiche_menu_charge_widget_mobile');
*/