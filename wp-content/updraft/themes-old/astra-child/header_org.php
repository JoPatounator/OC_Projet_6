<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

use function Elementor\echo_select_your_structure_title;

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
    <?php astra_head_top(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    if (apply_filters('astra_header_profile_gmpg_link', true)) {
    ?>
        <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php
    }
    ?>
    <?php wp_head(); ?>
    <?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
    <?php astra_body_top(); ?>
    <?php wp_body_open(); ?>

    <a
        class="skip-link screen-reader-text"
        href="#content"
        title="<?php echo esc_attr(astra_default_strings('string-header-skip-link', false)); ?>">
        <?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
    </a>

    <div
        <?php
        echo wp_kses_post(
            astra_attr(
                'site',
                array(
                    'id'    => 'page',
                    'class' => 'hfeed site',
                )
            )
        );
        ?>>
        <?php
        astra_header_before();
        //*********************************************************************************************************************************************
        /*wp_nav_menu(
			[
				'theme_location'  => 'primary',
				'menu_id'         => 'primary-menu',
				'menu_class' => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border ast-menu-hover-style-zoom stack-on-mobile',
				//'menu_class'      => 'main-header-menu',
				'ast-menu-shadow',
				'ast-nav-menu',
				'ast-flex',
				'ast-justify-content-flex-end',
				'container'       => 'div',
				'container_class' => 'main-header-bar-navigation site-header-primary-section-right site-header-section ast-flex ast-grid-right-section',
				'items_wrap'      => '<div class="main-navigation"><ul id="%1$s" class="%2$s">%3$s</ul></div></nav>',
			]
		);*/

        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '</head>';

        echo '<body>';
        // Début de la structure de l'en-tête principale
        echo '<div class="ast-main-header-wrap main-header-bar-wrap">';
        echo '<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">';
        echo '<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">';
        echo '<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">';

        // Section gauche de l'en-tête
        echo '<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">';
        echo '<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">';
        echo '<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">';
        echo '<span class="site-logo-img"><a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">';
        echo '<img width="240" height="41" src="' . esc_url(get_template_directory_uri() . '/images/logo.png') . '" class="custom-logo" alt="' . get_bloginfo('name') . '">';
        echo '</a></span>';
        echo '<div class="ast-site-title-wrap">';
        echo '<span class="site-title" itemprop="name"><a href="' . esc_url(home_url('/')) . '" rel="home" itemprop="url">' . get_bloginfo('name') . '</a></span>';
        echo '</div>'; // .ast-site-title-wrap
        echo '</div>'; // .site-branding
        echo '</div>'; // .ast-builder-layout-element
        echo '</div>'; // .site-header-primary-section-left

        // Section droite de l'en-tête
        echo '<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">';
        echo '<div class="ast-builder-menu-2 ast-builder-menu ast-flex ast-builder-menu-2-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-2">';
        echo '<div class="ast-main-header-bar-alignment">';
        echo '<div class="main-header-bar-navigation">';
        echo '<nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="secondary-site-navigation-desktop" aria-label="Second Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">';
        echo '<div class="main-navigation ast-inline-flex">';
        wp_nav_menu(array(
            'theme_location' => 'primary', // Emplacement du menu à utiliser
            'menu_id'        => 'primary-menu',
            'menu_class'     => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border ast-menu-hover-style-zoom stack-on-mobile',
        ));
        echo '</div>'; // .main-navigation
        echo '</nav>'; // .site-navigation
        echo '</div>'; // .main-header-bar-navigation
        echo '</div>'; // .ast-main-header-bar-alignment
        echo '</div>'; // .ast-builder-menu-2

        echo '</div>'; // .site-header-primary-section-right

        echo '</div>'; // .ast-builder-grid-row
        echo '</div>'; // .site-primary-header-wrap
        echo '</div>'; // .ast-primary-header-bar
        echo '</div>'; // .ast-main-header-wrap


        // ********************************************************************************************************************************************

        astra_header();
        /*wp_nav_menu(
			[


				'theme_location'  => 'primary',
				'container'       => 'div',
				'container_class' => 'site-header-primary-section-right ite-header-section ast-flesx ast-grid-right-section',
				'menu_class'      => 'class="main-header-menu ast-menu-shadow ast-nav-menu ast-flex  submenu-with-border ast-menu-hover-style-zoom  stack-on-mobile',
				//'menu_id'         => 'ast-hf-menu-1'
				//'items_wrap'      => '',
				//'echo'            => false,
			]
		);*/

        /*wp_nav_menu(
			[
				'theme_location'  => 'primary',
				'menu_id'         => 'primary-menu',
				'menu_class' => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border ast-menu-hover-style-zoom stack-on-mobile',
				//'menu_class'      => 'main-header-menu',
				'ast-menu-shadow',
				'ast-nav-menu',
				'ast-flex',
				'ast-justify-content-flex-end',
				'container'       => 'div',
				'container_class' => 'main-header-bar-navigation site-header-primary-section-right site-header-section ast-flex ast-grid-right-section',
				'items_wrap'      => '<div class="main-navigation"><ul id="%1$s" class="%2$s">%3$s</ul></div></nav>',
			]
		);*/



        echo '<!DOCTYPE html>';
        echo '<html>';
        echo '<head>';
        echo '</head>';

        echo '<body>';
        // Début de la structure de l'en-tête principale
        echo '<div class="site-header header-main-layout-1 ast-primary-menu-enabled ast-hide-custom-menu-mobile ast-builder-menu-toggle-icon ast-mobile-header-inline">';
        echo '<div class="ast-primary-header-bar ast-primary-header main-header-bar site-header-focus-item" data-section="section-primary-header-builder">';
        echo '<div class="site-primary-header-wrap ast-builder-grid-row-container site-header-focus-item ast-container" data-section="section-primary-header-builder">';
        echo '<div class="ast-builder-grid-row ast-builder-grid-row-has-sides ast-builder-grid-row-no-center">';

        // Section gauche de l'en-tête
        echo '<div class="site-header-primary-section-left site-header-section ast-flex site-header-section-left">';
        echo '<div class="ast-builder-layout-element ast-flex site-header-focus-item" data-section="title_tagline">';
        echo '<div class="site-branding ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">';
        echo '<span class="site-logo-img"><a href="' . esc_url(home_url('/')) . '" class="custom-logo-link" rel="home">';
        echo '<img width="240" height="41" src="' . esc_url(get_template_directory_uri() . '/images/logo.png') . '" class="custom-logo" alt="' . get_bloginfo('name') . '">';
        echo '</a></span>';
        echo '<div class="ast-site-title-wrap">';
        echo '<span class="site-title" itemprop="name"><a href="' . esc_url(home_url('/')) . '" rel="home" itemprop="url">' . get_bloginfo('name') . '</a></span>';
        echo '</div>'; // .ast-site-title-wrap
        echo '</div>'; // .site-branding
        echo '</div>'; // .ast-builder-layout-element
        echo '</div>'; // .site-header-primary-section-left

        // Section droite de l'en-tête
        echo '<div class="site-header-primary-section-right site-header-section ast-flex ast-grid-right-section">';
        echo '<div class="ast-builder-menu-2 ast-builder-menu ast-flex ast-builder-menu-2-focus-item ast-builder-layout-element site-header-focus-item" data-section="section-hb-menu-2">';
        echo '<div class="ast-main-header-bar-alignment">';
        echo '<div class="main-header-bar-navigation">';
        echo '<nav class="site-navigation ast-flex-grow-1 navigation-accessibility site-header-focus-item" id="secondary-site-navigation-desktop" aria-label="Second Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">';
        echo '<div class="main-navigation ast-inline-flex">';
        wp_nav_menu(array(
            'theme_location' => 'primary', // Emplacement du menu à utiliser
            'menu_id'        => 'primary-menu',
            'menu_class'     => 'main-header-menu ast-menu-shadow ast-nav-menu ast-flex submenu-with-border ast-menu-hover-style-zoom stack-on-mobile',
        ));
        echo '</div>'; // .main-navigation
        echo '</nav>'; // .site-navigation
        echo '</div>'; // .main-header-bar-navigation
        echo '</div>'; // .ast-main-header-bar-alignment
        echo '</div>'; // .ast-builder-menu-2

        echo '</div>'; // .site-header-primary-section-right

        echo '</div>'; // .ast-builder-grid-row
        echo '</div>'; // .site-primary-header-wrap
        echo '</div>'; // .ast-primary-header-bar
        echo '</div>'; // .ast-main-header-wrap


        astra_header_after();


        astra_content_before();
        ?>
        <div id="content" class="site-content">
            <div class="ast-container">
                <?php astra_content_top(); ?>