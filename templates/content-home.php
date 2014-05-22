<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php // get_template_part('templates/content', 'marketing'); ?>
<?php endwhile; ?>