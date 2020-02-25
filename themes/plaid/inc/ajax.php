<?php

/*
     ========================
    loadmore button
     ========================

*/

add_action('wp_ajax_nopriv_load_more','load_more');
add_action('wp_ajax_load_more','load_more');

function load_more(){
  $paged = $_POST['page']+1;
  $query = new WP_Query(
    array(
      'post_type'     =>  'project',
      'post_status'   =>  'publish',
      'posts_per_page'=>   6,
      'paged' =>   $paged,

    )
  );
  if($query -> have_posts()):
    while($query -> have_posts()):
      $query -> the_post();

      get_template_part('template-part/brick','container');
      //get_template_part('template-part/append','method');

    endwhile;
  else: echo 0;
  endif;
  wp_reset_postdata();
  die();
}


/*
     ========================
    like button
     ========================

*/

remove_action('rest_api_init','create_initial_rest_routes',0);

add_action('rest_api_init',function(){
  register_rest_route('likebtn/v2','project/(?P<id>[\d]+)',
              array(
                'methods'=>array('GET','POST'),
                'args'=> array('id'),
                'callback'=>'add_like',
              ));
});

function add_like(WP_REST_Request $request){
    $field_name = 'likes_number';
    $current_likes = get_field($field_name,$request['id']);
    $updated_likes = $current_likes + 1;
    $likes = update_field($field_name,$updated_likes,$request['id']);
    return $likes;
}
