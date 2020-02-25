<?php get_header(); ?>

<body <?php body_class(); ?>>

  <div class="entire-container">

      <?php get_template_part('template-part/header','container'); ?>

      <main>

        <div class="main-gallery">
            <?php
                $args = array(
                  'post_type'     =>  'project',
                  'post_status'   =>  'publish',
                  'posts_per_page'=>   6,

                );

                $query = new WP_Query( $args );

                if( $query->have_posts()):
                  while ($query->have_posts()):
                    $query->the_post();
             ?>
             <?php get_template_part('template-part/brick','container'); ?>

             <?php
                   endwhile;
                endif;

                wp_reset_postdata();

              ?>
        </div><!-- main-gallery -->


        <div class="loadmore-container">

          <a class="loadmore-function" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
            <div class="wrapper">

                      <div class="loadmore-btn loadmore-btn--primary loadmore-btn--border loadmore-btn--animated">

                           Load More

                     </div>

            </div><!-- wrapper -->
          </a>

        </div><!-- loadmore-container -->


      </main>

   </div><!-- .entire-container -->


<?php get_footer(); ?>
