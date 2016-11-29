<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CETransportation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cet' ); ?></a>

        <div class="header-bg">
            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
                    <?php
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://src.wordpress-develop.dev/wp-content/uploads/2016/11/cet-logo.png"></a></p>
                    <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                    <?php
                    endif; ?>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cet' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                
                <div class="banner">
                    
                    <?php if ( is_front_page() ) : ?>
                    
                        <h2 class="home-h">Motivating Exellence</h2>
                    
                    <?php else : ?>
                    
                        <h2 class="overview-h"><?php echo the_title() ?></h2>
                    
                    <?php endif; ?>
                    
                </div>
            </header><!-- #masthead -->
        </div>
    
    <?php if ( is_front_page() ) : ?>
    
        <div class="triangle-container">
            <div class="triangle-clip"></div>
            <h2>We’re a full-service transportation engineering firm</h2>
            
            <p>Our primary service areas include traffic engineering, transportation planning, and electrical engineering. Our goal is to provide clients with creative and innovative solutions to build safe, efficient, and sustainable transportation systems while more efficiently utilizing the existing infrastructure. </p>
            <br>
            <p><a>Read more about Concord</a></p>
        </div>
    
     <?php endif; ?>        
        

	<div id="content" class="site-content">
        
        
        
        
        
        
        
        
        
        
