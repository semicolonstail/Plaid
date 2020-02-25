<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

      <main class="single-background">

        <div class="single-container">
          <?php
            if(have_posts()) :
              while (have_posts()) :
                  the_post();
           ?>

           <div class="single-info">

               <div class="single-title">
                 <?php the_title(); ?>
               </div>

               <div class="single-name">
                 <?php  the_field('designer', get_the_ID()); ?>
               </div>

               <div class="single-year">
                 <?php the_field('enrollment_year', get_the_ID()); ?>
               </div>

           </div><!-- single-info -->


           <div class="single-content">

               <div class="single-des">
                 <?php the_field('description', get_the_ID()); ?>
               </div>

               <div class="single-image">
                 <?php
                 the_post_thumbnail('display');
                 the_content(); ?>
               </div>

           </div><!-- single-content -->


           <div class="single-footer">

               <button class="like-button" data-id="<?php the_ID(); ?>">
                   <i class="plaid-icon plaid-heart"></i>
                   <span class="like-number"> <?php the_field('likes_number', get_the_ID()); ?></span>
               </button>

               <div class="social-container">

                   <?php
                      $title = get_the_title();
                      $permalink = get_permalink();

                      $twitter = 'https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $permalink;
                      $facebook = 'https://facebook.com/sharer/sharer.php?u=' . $permalink;
                      $google = 'https://plus.google.com/share?url=' . $permalink;

                    ?>
                    <div class="share-this-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/share.png" height="40px" width="40px"/>
                    </div>

                    <div class="social twitter">
                      <a href="<?php echo $twitter; ?>" target="_blank" rel="nofollow" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" height="40px" width="40px"/>
                      </a>
                    </div>

                    <div class="social facebook">
                      <a href="<?php echo $facebook; ?>" target="_blank" rel="nofollow" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" height="40px" width="40px"/>
                      </a>
                    </div>

                    <div class="social google">
                      <a href="<?php echo $google; ?>" target="_blank" rel="nofollow" >
                        <img src="<?php echo get_template_directory_uri(); ?>/img/googleplus.png" height="40px" width="40px"/>
                      </a>
                    </div>

               </div><!-- social-container -->


           </div><!-- single-footer -->

           <div class="footer-info">
                <div class="footer-title"><?php the_title(); ?></div>
                <div class="footer-date"><?php the_date(); ?></div>
           </div><!-- footer-info -->

           <?php

              endwhile;
            endif;
           ?>
        </div><!-- single-container -->

      </main><!-- single-background -->

   <?php wp_footer(); ?>

  </body>

</html>
