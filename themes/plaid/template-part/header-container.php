<header class="header-container">

  <div class="logo-container">
    <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"  alt="" style="height:100%" /></a>
  </div>

  <nav class="menu-container">
    <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav-ul', // header navigation: class name, if want to set the style of items, use ".nav-ul li"
            'items_wrap' => '<ul class="%2$s">%3$s</ul>'
          )
        );
     ?>
  </nav>

  <div class="search-bar">

      <a href="<?php echo bloginfo('url').'/course-gallery';?>"><span class="plaid-icon plaid-search"></span></a>

  </div>

</header>
