<?

// Add custom post types
// Custom post type of Services
function create_services()
{
  register_post_type(
    'services',
    array(
      'labels' => array(
        'name' => __('Services'),
        'singular_name' => __('Service')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'services'),
      'show_in_rest' => true,
      'supports' => array('revisions', 'excerpt', 'title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_icon' => 'dashicons-media-document',
    )
  );
}
add_action('init', 'create_services');
