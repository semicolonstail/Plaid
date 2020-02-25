<?php get_header(); ?>

<body <?php body_class(); ?>>

    <?php get_template_part('template-part/header','container'); ?>

    <main>

         <div class="search-result-bar">
                <?php echo do_shortcode('[searchandfilter fields="search"] '); ?>
         </div>

         <?php if( have_posts() ): ?>

         <div class="archive-info">
               <?php

                 the_archive_title('<h1 class="archive-course-title">', '</h1>');
                 the_archive_description('<div class="archive-course-description">', '</div>');

               ?>
         </div><!-- search-result-bar -->

          <?php get_template_part('template-part/search','result'); ?>

         <?php endif ?>
    </main>


<?php get_footer(); ?>
