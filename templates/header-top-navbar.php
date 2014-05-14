<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <?php
      get_template_part('templates/secondary', 'navbar');
    ?>
  </div>
</header>
