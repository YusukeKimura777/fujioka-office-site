<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">

    <?php if(is_home()): ?>
      <meta name="description" content="藤岡行政書士事務所のトップ">
    <?php endif; ?>
    <?php if(is_single()): ?>
      <meta name="description" content="藤岡行政書士事務所のブログ">
    <?php endif; ?>
    <?php if (is_page('blog') || is_category()): ?>
      <meta name="description" content="藤岡行政書士事務所のブログ一覧">
    <?php endif; ?>
    <?php if (is_page_template('page-about.php')): ?>
      <meta name="description" content="藤岡行政書士事務所の概要">
    <?php endif; ?>
    <?php if (is_page_template('page-price.php')): ?>
      <meta name="description" content="藤岡行政書士事務所の利用金額">
    <?php endif; ?>
    <?php if (is_page_template('page-service.php')): ?>
      <meta name="description" content="藤岡行政書士事務所のサービス">
    <?php endif; ?>
    <?php if (is_page_template('page-contact.php')): ?>
      <meta name="description" content="藤岡行政書士事務所の問い合わせ">
    <? endif; ?>
    <?php if ( 
      !is_page_template('page-about.php') &&
      !is_page_template('page-price.php') &&
      !is_page_template('page-service.php') &&
      !is_page_template('page-contact') &&
      is_page()): 
    ?>
      <meta name="description" content="藤岡行政書士事務所">
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">

    <!-- style css -->
    <?php if(is_home()): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/index.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if(is_single()): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/blog-content.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if (is_archive()): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/blog.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if (is_page_template('page-about.php')): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/about.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if (is_page_template('page-price.php')): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/price.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if (is_page_template('page-service.php')): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/service.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>
    <?php if (is_page_template('page-contact.php')): ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/contactform.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <? endif; ?>
    <?php if ( 
      !is_page_template('page-about.php') &&
      !is_page_template('page-price.php') &&
      !is_page_template('page-service.php') &&
      !is_page_template('page-contact.php') &&
      is_page()): 
    ?>
      <?php
      function twpp_enqueue_styles() {
        wp_enqueue_style( 
          'sub-style',
          get_template_directory_uri() . '/css/page.min.css'
        );
      }
      add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );
      ?>
    <?php endif; ?>

    <!-- jQuery Core 3.4.1 -->
    <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- bgswitcher jQuery -->
    <?php  if (is_home()): ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.BgSwitcher/0.4.3/jquery.bgswitcher.min.js"></script>
    <?php endif; ?>

    <!-- iSroll jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>

    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

    <!-- google map API key -->
    <?php if (is_home() || is_page_template('page-about.php')): ?>
      <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDZ0V7M2XO6OFDdU0w7tp6C7zPwh-TeSf4&callback=initMap" async></script>
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>

  <body class="drawer drawer--right">
    <div class="home">
      <header class="home-heading">
        <figure>
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/typo@2x.png" alt="ロゴ"></a>
        </figure>
        
        <div class="pc">
          <nav class="home-heading-nav">
            <?php
            $args = array(
              'menu' => 'fujioka-menu',
              'menu_class' => '',
              'container' => false
            );
            wp_nav_menu($args);
            ?>
          </nav>
        </div>

        <div class="iphone">
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
          <nav class="drawer-nav" role="navigation">
            <?php
            $args = array(
              'menu' => 'fujioka-menu',
              'menu_class' => 'drawer-menu',
              'container' => false
            );
            wp_nav_menu($args);
            ?>
          </nav>
        </div>
      </header>