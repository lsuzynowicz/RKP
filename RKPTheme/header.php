<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/logo5.png">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Site -->
	<div id="page" class="site">
		<!-- Menu -->
        <nav>
        <div class="menu-logo">
            <div class="logo-size">
                <a href="https://rkp.com.pl"><img src="\wp-content\themes\RKPTheme\images\rkp logo gimp .png"></a>
            </div>
        </div>
        <div class="hamburger-right">
            <input type="checkbox" id="checkbox1" class="checkbox1 visuallyHidden">
            <label for="checkbox1">
                <div class="hamburger hamburger1">
                    <span class="bar bar1"></span>
                    <span class="bar bar2"></span>
                    <span class="bar bar3"></span>
                    <span class="bar bar4"></span>
                </div>
            </label>
        </div>
            <div class="menu-content">
            
                    <?php if ( has_nav_menu( 'primary' ) ) { ?>
                                        <!-- Menu-Navigation -->
                                                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                                        <?php wp_nav_menu(
                                                                array(
                                                                    'theme_location' => 'primary',
                                                                    'menu_class' => 'menu-content-row',
                                                                ));?>
                                                <?php endif; ?>
                                        <!-- .Menu-Navigation -->
                                <?php }else {
                                        wp_list_pages( array(
                                            'container' => '',
                                            'title_li' 	=> '',
                                        ));
                                }?>
                </div>
    </nav>
        
    </div>
		<!-- .Menu -->
        <!-- Main-Menu -->
       
					<!-- .Main-Menu -->