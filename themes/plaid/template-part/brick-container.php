
<div class="brick-container">

  <a data-fancybox data-type="iframe" data-src="<?php the_permalink(); ?>" href="javascript:;" class="brick">

    <div class="overlay-info">

       <div class="project-box">

         <div class="project-title">
              <?php the_title(); ?>
         </div>

         <div class="project-designer">
              <?php the_field('designer', get_the_ID()); ?>
         </div>

         <div class="project-year">
              <?php the_field('enrollment_year', get_the_ID()); ?>
         </div>

       </div><!-- project-box -->

    </div><!-- overlay-info -->


    <div class="img-container">
      <?php the_post_thumbnail('thumbnail-index'); ?>

    </div><!-- img-container -->

  </a>

</div><!-- brick-container -->
