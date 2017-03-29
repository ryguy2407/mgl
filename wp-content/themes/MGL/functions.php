<?php


// Custom image sizes
add_image_size('slideshow', '1500', '400', true);
add_image_size('large-thumb', '600', '600', true);
// End custom image sizes

// Custom post types
add_action( 'init', 'mgl_create_posttype' );
function mgl_create_posttype() {
  register_post_type( 'mgl_project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'menu_icon' => 'dashicons-hammer'
    )
  );
}
// End custom post types