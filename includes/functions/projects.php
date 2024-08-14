<?

// Add custom post types
// Custom post type of Projects
function create_projects()
{
  register_post_type(
    'projects',
    array(
      'labels' => array(
        'name' => __('Projects'),
        'singular_name' => __('Project')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'show_in_rest' => true,
      'supports' => array('revisions', 'title', 'editor', 'thumbnail'),
      'taxonomies' => array('category'),
      'menu_icon' => 'dashicons-portfolio',
    )
  );
}
add_action('init', 'create_projects');
