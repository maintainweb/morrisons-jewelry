<header class="banner" role="banner">
  <div class="">
    <div class="">
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'list-group', 'before' => '<div class="list-group-item">', 'after' => '</div>'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
