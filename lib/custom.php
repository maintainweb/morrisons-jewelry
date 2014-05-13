<?php
/**
 * Custom functions
 */
require_once locate_template('/lib/post-types.php');          // Custom Post Types

// http://wordpress.org/support/topic/blog-tab-gets-highlighted-in-nav-menu-for-custom-post-types
function custom_fix_blog_tab_on_cpt($classes,$item,$args) {
    if(!is_singular('post') && !is_category() && !is_tag()) {
        $blog_page_id = intval(get_option('page_for_posts'));
        if($blog_page_id != 0) {
            if($item->object_id == $blog_page_id) {
        unset($classes[array_search('active',$classes)]);
      }
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class','custom_fix_blog_tab_on_cpt',10,3);


if( function_exists('acf_add_options_sub_page') )
{
    acf_add_options_sub_page(array(
        'title' => 'Branding Options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Social & Analytics'
    ));
}
