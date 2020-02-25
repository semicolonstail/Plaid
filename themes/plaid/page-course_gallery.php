<?php
/*
Template Name: Course Gallery
*/
 get_header();
 ?>
<body <?php body_class(); ?>>

  <?php get_template_part('template-part/header','container'); ?>

      <main>
          <div class="course-search">
             <div class="search-form">
                   <?php echo do_shortcode('[searchandfilter fields="search,course,style"] '); ?>
             </div><!-- course-search -->

             <div class="entire-course-content">
               <?php
                        $terms = get_terms( array(
                                    'taxonomy' => 'course',
                                    'hide_empty' => false,
                                ) );
                             $i=0;
                            foreach($terms as  $term){
                              $i++;
               ?>
                             <div class="course-container">

                                 <div class="course-name">
                                    <?php echo $term->name; ?>
                                 </div>

                                 <div class="course-description">
                                   <?php echo $term->description; ?>
                                 </div>

                                 <div class="course-button">
                                   <a href="
                                      <?php
                                      $slug = $term->slug;
                                      echo  bloginfo('url').'/course/'.$slug;
                                      ?>">
                                     <div class="view-all">
                                       View All
                                     </div>
                                   </a>
                                 </div><!-- course-button -->

                             </div><!-- course-container -->

                      <?php } ?>

             </div><!-- entire-course-content -->




          </div><!-- course-search -->



      </main>



 <?php get_footer(); ?>
