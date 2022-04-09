<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php do_action('storefront_before_site'); ?>

    <div id="page" class="hfeed site">
        <?php do_action('storefront_before_header'); ?>

        <!--==========================
  Header
  ============================-->
        <header id="header" class="fixed-top">
            <div class="container">

                <div class="logo float-left">
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <h1 class="text-light"><a href="<?php echo site_url(); ?>"><span>Die Antik Banausen</span></a></h1>
                    <!-- <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
                </div>

                <nav class="main-nav float-right d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="<?php echo (is_front_page()) ? '#intro' : site_url() . '#intro'; ?>">Home</a></li>
                        <li><a href="<?php echo (is_front_page()) ? '#about' : site_url() . '#about'; ?>"><?php echo get_field('wer_wir_sind'); ?></a></li>
                        <li><a href="<?php echo (is_front_page()) ? '#services' : site_url() . '#services'; ?>"><?php echo get_field('kategorie_title'); ?></a></li>
                        <li><a href="<?php echo site_url() . '/unsere-artikel'; ?>"><?php echo get_field('unsere_artikel_titel'); ?></a></li>
                        <!-- <li><a href="#team">Unsere Gesischter</a></li> -->
                        <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
                        <li><a href="<?php echo (is_front_page()) ? '#contact' : site_url() . '#contact'; ?>"><?php echo get_field('wo_man_uns_findet_title'); ?></a></li>
                    </ul>
                </nav><!-- .main-nav -->

            </div>
        </header><!-- #header -->