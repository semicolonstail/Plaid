<?php

function menu_setup(){

  add_theme_support('menus');
  register_nav_menu('primary','Primary Hearder Navigation');
}

add_action('init','menu_setup');




  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('aside','image'));
  add_theme_support('html5', array('search-form'));

  add_image_size('thumbnail-index', 690);
  add_image_size('display', 690);
  add_image_size('course', 450, 300, true);
