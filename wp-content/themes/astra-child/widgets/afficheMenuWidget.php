<?php

// Création du widget
class Affiche_Menu_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            // ID de base du widget
            'affiche_menu_widget',

            // Le nom du widget qui apparaîtra dans l'UI
            __('Widget Affiche Menu', 'textdomain')
        );
    }

    // Méthode d'affichage du widget (front-end)
    public function widget($args, $instance)
    {
        // Arguments avant et après le widget définis par les thèmes
        echo $args['before_widget'];

        // Affichage du menu WordPress
        wp_nav_menu(array(
            'theme_location' => 'primary', // Location du menu dans le thème
            'menu_id'        => 'primary-menu', // ID du menu
            'menu_class'     => 'main-header-main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border ast-menu-hover-style-zoom stack-on-mobile', // Classe CSS du menu 
            //'container'       => $instance['container'], // Ajout du paramètre container
            //'container_class' => $instance['container_class'], // Ajout du paramètre container_class
            //'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<div class="separateur-menu-lignes"></div></ul>', // Ajout des divs
            //'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="separateur-menu-lignes"></li></ul>', // Ajout des divs
        ));

        echo $args['after_widget'];
    }

    // Formulaire de configuration du widget (back-end)
    public function form($instance)
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'textdomain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('theme_location'); ?>"><?php _e('Theme Location:', 'textdomain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('theme_location'); ?>" name="<?php echo $this->get_field_name('theme_location'); ?>" type="text" value="<?php echo esc_attr($theme_location); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('menu_id'); ?>"><?php _e('Menu ID:', 'textdomain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('menu_id'); ?>" name="<?php echo $this->get_field_name('menu_id'); ?>" type="text" value="<?php echo esc_attr($menu_id); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('menu_class'); ?>"><?php _e('Menu Class:', 'textdomain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('menu_class'); ?>" name="<?php echo $this->get_field_name('menu_class'); ?>" type="text" value="<?php echo esc_attr($menu_class); ?>" />
        </p>
<?php
    }

    // Mise à jour des paramètres du widget
    public function update($new_instance, $old_instance)
    {
        $instance = [];
        $instance['title'] = $new_instance['title'];
        return $instance;
    }
}
