<div class="row">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-4">
      <a href="<?php the_permalink(); ?>">
        <article <?php post_class(); ?>>
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>
          <div class="thumbnail-wrapper">
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('full', array('class' => 'img-responsive'));
            } ?>
          </div>
          <div class="entry-content">
            <?php // the_excerpt(); ?>
          </div>
          <footer>

          </footer>
        </article>
      </a>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>
