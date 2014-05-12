<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <div class="top-container container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
      <?php
        do_action('get_header');
        // Use Bootstrap's navbar if enabled in config.php
        if (current_theme_supports('bootstrap-top-navbar')) {
          get_template_part('templates/header-top-navbar');
        } else {
          get_template_part('templates/header');
        }
      ?>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9">
      <?php
          get_template_part('templates/content', 'header-image');
      ?>
      </div>
    </div>
  </div>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
