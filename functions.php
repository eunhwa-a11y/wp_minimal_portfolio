<?php

  // 변수 등록
  define('THEMEROOT', get_stylesheet_directory_uri());
  define('IMAGES', THEMEROOT.'/images');

  // 만약 이 함수가 없다면 만들어!
  if(! function_exists('minimal_script')){
    function minimal_script(){
      // script 등록
      wp_register_script('bootstrap-js', THEMEROOT.'/js/bootstrap.min.js', true, false, true);
      // script 로드
      wp_enqueue_script('bootstrap-js');
      // css 로드
      wp_enqueue_style('common-css', THEMEROOT.'/css/common.css');
      wp_enqueue_style('bootstrap-grid', THEMEROOT.'/css/bootstrap-grid.min.css');
      wp_enqueue_style('default', THEMEROOT.'/css/default.css');
      wp_enqueue_style('responsive', THEMEROOT.'/css/responsive.css');
    }
    add_action('wp_enqueue_scripts', 'minimal_script');
  }

  function register_my_menu() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menu' );

  // 테마가 특성 이미지를 추가할 수 있도록 
  add_theme_support( 'post-thumbnails' );