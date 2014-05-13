<?php
        $image = get_field('header_image');

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
    <div id="header-image" class="" >
      <div class="header-inner">
          <style>
           #header-image {
            background-image: url(<?php echo $large; ?>);
          }
          </style>
      </div>
    </div>
