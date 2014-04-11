    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('secondary_navigation')) :
          wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => 'nav nav-pills nav-justified'));
        endif;
        ?>
    </nav>