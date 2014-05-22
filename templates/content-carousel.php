<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
     <div class="carousel-inner">
<?php
$c = 0;
$class = '';
query_posts('category_name=carousel&showposts=3');
if ( have_posts() ) : while ( have_posts() ) : the_post();
$c++;
if ( $c == 1 ) $class .= ' active';
?>

        <div class="item <?php echo $class; ?>">
          <?php get_template_part('templates/content', 'featured-image'); ?>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
<?php
endwhile;endif;
wp_reset_query();
?>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->