<?php get_header(); ?>

<body <?php body_class(); ?>>

    <?php get_template_part('template-part/header','container'); ?>

    <main class="entire-error-container">

      <h1>404 Error</h1>

    <section class="error-container">
      <span class="four"><span class="screen-reader-text">4</span></span>
      <span class="zero"><span class="screen-reader-text">0</span></span>
      <span class="four"><span class="screen-reader-text">4</span></span>
    </section>
    <div class="link-container">
      <a target="_blank" href="<?php bloginfo('url');?>" class="more-link">Back To Homepage</a>
    </div>


    </main>


<?php get_footer(); ?>
