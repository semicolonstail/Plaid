<?php get_header(); ?>

<body <?php body_class(); ?>>

    <?php get_template_part('template-part/header','container'); ?>

    <main>

         <div class="search-result-bar">
                <?php echo do_shortcode('[searchandfilter fields="search"] '); ?>
         </div>

         <?php if( have_posts() ): ?>

         <div class="search-info">

             <h1>"<?php echo get_search_query(); ?>"</h1>

         </div><!-- search-result-bar -->


          <?php get_template_part('template-part/search','result'); ?>
        <?php else:?>
           <h1 class="search-info" style="line-height:250px;">No Result!</h1>

         <?php endif ?>
    </main>


<?php get_footer(); ?>
