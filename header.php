<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >               

    <!--  preloader start -->
    <!-- <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div> -->
    <!-- preloader end -->

    <!--header start-->
    <header class="app-header">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="social-links ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="logo">
                        <h1>
                            <a href="index.html">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo@2x.png 2x"  alt=""/>
                            </a>
                        </h1>
                    </div>
                    <div class="search-row">
                        <div class="search_toggle">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/search-icon.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/search-icon@2x.png 2x" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <!--search overlay start-->
    <?php get_template_part( 'template-parts/search/overlay') ?>
    <!--search overlay end-->

    <!--nav start-->
    <nav class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location'    => 'menu-1',
                            'menu_id'           => 'menu',
                            'menu_class'        => 'menu',
                        )
                    );
                ?>
                </div>
            </div>
        </div>
    </nav>

    <!--responsive nav start-->
    <div class="mobile-menu">
        <div class="search_toggle toggle-wrap">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/search-icon.png" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/search-icon@2x.png 2x" alt=""/>
        </div>
    </div><!--responsive nav end-->

    <!--nav end-->

    <!--hero start-->
    <?php if('1'==get_theme_mod('verum_banner_switcher')): ?>
    <?php 
        $verum_banner_value   = get_theme_mod( 'verum_banner', '1' );
        echo $verum_banner_value;
        get_template_part( 'template-parts/banner/banner', $verum_banner_value );
    ?>

    <!--hero end-->
    <?php endif; ?>

    <?php 
    
    $taxonomy_test = get_theme_mod('verum_taxonomy');
    echo "<pre>";
    print_r($taxonomy_test);
    echo "</pre>";
    
    
    ?>