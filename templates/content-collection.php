<div class="row">
    <?php while (have_posts()) : the_post(); ?>
    <div class="col-sm-4">
      <article <?php post_class(); ?>>
                <div class="thumbnail-wrapper">
                  <?php 
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full', array('class' => 'img-responsive'));
                  } ?>
                </div>
        <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
        <footer>
          <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>
    <?php endwhile; ?>
</div>
