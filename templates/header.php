<header class="banner" role="banner">
  <div id="branding-header-row" class="row">
    <div id="branding-header-col" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php get_template_part('templates/content', 'branding'); ?>
      <a class="brand" href="<?php echo home_url('/') ?>"><?php bloginfo('name'); ?></a>
    </div>
  </div>
  <div id="nav-row" class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'list-group', 'before' => '<div class="list-group-item">', 'after' => '</div>'));
          endif;
        ?>
      </nav>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
      <?php if (is_front_page()) : ?>
        <?php get_template_part('templates/content', 'carousel'); ?>
      <?php else : ?>
        <?php get_template_part('templates/content', 'header-image'); ?>
      <?php endif ?>
    </div>
  </div>
</header>