<div class="search-result-container">

         <?php while(have_posts()):
              the_post();
                $current_id = get_the_ID();
              if(get_post_type($current_id)=="project"):

         ?>

           <article class="id="post-<?php the_ID(); ?>" <?php post_class(); ?>">

             <a data-fancybox data-type="iframe" data-src="<?php the_permalink(); ?>" href="javascript:;" class="brick">

                   <div class="archive-img">
                     <?php the_post_thumbnail('course'); ?>
                   </div>

                   <div class="archive-info-box">

                         <div class="archive-title">
                              <?php the_title(); ?>
                         </div>

                         <div class="archive-designer">
                              <?php the_field('designer', get_the_ID()); ?>
                         </div>

                         <div class="archive-year">
                              <?php the_field('enrollment_year', get_the_ID()); ?>
                         </div>

                   </div><!-- archive-info -->

             </a>

           </article>

         <?php  else: null; endif; endwhile ?>

</div><!-- search-result-container -->
