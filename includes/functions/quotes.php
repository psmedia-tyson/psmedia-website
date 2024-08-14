<?

// Add custom post types
// Custom post type of Projects
function create_quotes()
{
  register_post_type(
    'quotes',
    array(
      'labels' => array(
        'name' => __('Quotes'),
        'singular_name' => __('Quote')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'quotes'),
      'show_in_rest' => true,
      'supports' => array('revisions', 'title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_icon' => 'dashicons-format-quote',
    )
  );
}
add_action('init', 'create_quotes');
