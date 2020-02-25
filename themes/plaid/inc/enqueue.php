<?php

function plaid_load_scripts(){

  wp_enqueue_style('plaid', get_template_directory_uri().'/css/plaid.css');
  wp_enqueue_style('OpenSans','https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800');

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri().'/js/jquery.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('plaid', get_template_directory_uri().'/js/plaid.js');
  //wp_enqueue_script('masonry1', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
  //wp_enqueue_script('masonry2', 'https://masonry.desandro.com/masonry.pkgd.js');

  wp_localize_script('plaid','likeinfo',array(

          'template_url' => get_bloginfo('template_url'),
          'site_url' => get_bloginfo('url'),
          'post_id'  => get_queried_object()
  ));


}
add_action('wp_enqueue_scripts','plaid_load_scripts');
