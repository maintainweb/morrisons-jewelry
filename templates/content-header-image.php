<?php
        $image = get_field('header_image');
        $background_color = get_field('background_color');
        $text_color = get_field('text_color');
        if( !empty($image) )
        {
          $image = get_field('header_image');
        }
        else
        {
          $image = get_field('backup_header_image', 'options');
        }

 
        if( !empty($image) ): 
         
          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];
         
          // thumbnail
          $size = 'large';
          $large = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ];

?>
<?php endif; ?>
<style>
  #header-image-<?php the_ID(); ?> {
    background-image: url(<?php echo $large; ?>);
      <?php if( $width < 700 ): ?>
    background-size: contain;
    text-align: center;
      <?php else : ?>
    background-size: cover;
    text-align: center;
      <?php endif; ?>
    background-color: <?php echo $background_color; ?>;
    
  }
  .carousel-caption, .carousel-caption h1, .carousel-caption h1 a {
    color: <?php echo $text_color; ?>;
  }
</style>
<div id="header-image-<?php the_ID(); ?>" class="header-image" >
  <div class="header-inner"> </div>
</div>