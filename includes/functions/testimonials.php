<?

// Add custom post types
// Custom post type of Services
function create_testimonials()
{
  register_post_type(
    'testimonials',
    array(
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'testimonials'),
      'show_in_rest' => true,
      'supports' => array('revisions', 'excerpt', 'title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_icon' => 'dashicons-admin-comments',
    )
  );
}
add_action('init', 'create_testimonials');
