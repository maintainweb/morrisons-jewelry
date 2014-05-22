<?php if (is_singular('collections')) {
	if ( has_post_thumbnail() ) {
	  the_post_thumbnail('medium', array('class' => 'img-responsive'));
	}
}
dynamic_sidebar('sidebar-primary');