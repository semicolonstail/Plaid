<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
  <!--  <script type="text/javascript">
          <?php  //echo "bloginfo={template_url:'". get_bloginfo('template_url'). "' , site_url: ' ". get_bloginfo('url') . "' , post_id: '" . get_queried_object() . "'}"
          //array(

                  //'template_url' => ,
                  //'site_url' => get_bloginfo('url'),
                  //'post_id'  => get_queried_object()
          //)
          ?>
    </script> -->

    <?php wp_head(); ?>

  </head>
