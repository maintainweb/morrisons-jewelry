<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
<?php
$c = 0;
$class = '';
query_posts('post_type=collections&category_name=carousel&showposts=3');
if ( have_posts() ) : while ( have_posts() ) : the_post();
if ( $c == 2 ) { $class = 'active'; }
?>
		<div class="item <?php echo $class; ?>">
			<?php get_template_part('templates/content', 'header-image'); ?>
          	<div class="container">
            	<div id="carousel-caption-<?php the_ID(); ?>" class="carousel-caption">
              		<h1><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              		<p><?php the_excerpt(); ?></p>
              		<p><a class="btn btn-lg btn-primary" href="<?php the_permalink(); ?>" role="button">View <?php the_title(); ?> Collection</a></p>
            	</div>
          	</div>
        </div>
	<?php
	$c++;
	endwhile;
	endif;
	wp_reset_query();
	?>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
</div><!-- /.carousel -->