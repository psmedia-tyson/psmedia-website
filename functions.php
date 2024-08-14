<?php
function codyframe_register_styles()
{

  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style('codyframe', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version);
}

add_action('wp_enqueue_scripts', 'codyframe_register_styles');

function codyframe_register_scripts()
{

  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_script('codyframe', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true);
}

add_action('wp_enqueue_scripts', 'codyframe_register_scripts');

// no-js support
function codyframe_js_support()
{
?>
  <script>
    document.getElementsByTagName("html")[0].className += " js";
  </script>
  <?php
}

add_action('wp_print_scripts', 'codyframe_js_support');

// Enable Thumbnail Support
add_theme_support('post-thumbnails');

// Add Menu Functionality
function wpb_custom_new_menu()
{
  register_nav_menus(
    array(
      'primary' => __('Primary Menu'),
      'action' => __('Action Menu'),
      'social' => __('Social Menu'),
    )
  );
}
add_action('init', 'wpb_custom_new_menu');

// Theme Settings Function for ACF
if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'   => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Archive and Blog Headers',
    'menu_title'    => 'Archive and Blog Header',
    'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'    => 'Calls to Action',
    'menu_title'    => 'CTAs',
    'parent_slug'   => 'theme-general-settings',
  ));
}

add_theme_support('custom-logo');

function themename_custom_logo_setup()
{
  $defaults = array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true,
  );

  add_theme_support('custom-logo', $defaults);
}


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function irbyone_pagination()
{
  global $wp_query;
  $big = 999999999;
  echo paginate_links(array(
    'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
    'format'    => '?paged=%#%',
    'current'   => max(1, get_query_var('paged')),
    'total'     => $wp_query->max_num_pages,
    'prev_text' => __('<i class="far fa-long-arrow-alt-left"></i>'),
    'next_text' => __('<i class="far fa-long-arrow-alt-right"></i>'),
  ));
}

//=========================================================
// Add New Colors Section : DIWP Colors
//=========================================================

function diwp_customizer_add_colorPicker($wp_customize)
{

  // Add New Section: DIWP Colors

  $wp_customize->add_section('diwp_color_section', array(
    'title' => 'Theme Colors',
    'description' => 'Set Colors For Background & Links',
    'priority' => '40'
  ));

  // Add Settings 
  $wp_customize->add_setting('diwp_primary_color_dark', array(
    'default' => '#2c1eaf',
  ));

  // Add Settings 
  $wp_customize->add_setting('diwp_primary_color', array(
    'default' => '#4935e8',
  ));

  // Add Settings 
  $wp_customize->add_setting('diwp_primary_color_light', array(
    'default' => '#7c69ef',
  ));

  //---
  $wp_customize->add_setting('diwp_accent_color_dark', array(
    'default' => '#b51240',
  ));

  // Add Settings 
  $wp_customize->add_setting('diwp_accent_color', array(
    'default' => '#e51752',
  ));

  // Add Settings 
  $wp_customize->add_setting('diwp_accent_color_light', array(
    'default' => '#f24b7d',
  ));



  // Add Controls
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_primary_color', array(
    'label' => 'Primary Color',
    'description' => 'Your brands primary color',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_primary_color'
  )));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_primary_color_light', array(
    'label' => 'Primary Color Light',
    'description' => 'Used as Primary color\'s hover state',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_primary_color_light'
  )));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_primary_color_dark', array(
    'label' => 'Primary Color Dark',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_primary_color_dark'
  )));

  //--
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_accent_color', array(
    'label' => 'Accent Color',
    'description' => 'Your brands Accent color',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_accent_color'
  )));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_accent_color_light', array(
    'label' => 'Accent Color Light',
    'description' => 'Used as Accent color\'s hover state',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_accent_color_light'
  )));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'diwp_accent_color_dark', array(
    'label' => 'Accent Color Dark',
    'section' => 'diwp_color_section',
    'settings' => 'diwp_accent_color_dark'
  )));
}

add_action('customize_register', 'diwp_customizer_add_colorPicker');


function diwp_generate_theme_option_css()
{

  $primary_color = get_theme_mod('diwp_primary_color');
  $primary_color_dark = get_theme_mod('diwp_primary_color_dark');
  $primary_color_light = get_theme_mod('diwp_primary_color_light');
  $accent_color = get_theme_mod('diwp_accent_color');
  $accent_color_dark = get_theme_mod('diwp_accent_color_dark');
  $accent_color_light = get_theme_mod('diwp_accent_color_light');


  if (!empty($primary_color)) :

  ?>
    <style type="text/css" id="diwp-theme-option-css">
      :root {
        --color-primary-dark: <?php echo $primary_color_dark; ?>;
        --color-primary: <?php echo $primary_color; ?>;
        --color-primary-light: <?php echo $primary_color_light; ?>;

        --color-accent-dark: <?php echo $accent_color_dark; ?>;
        --color-accent: <?php echo $accent_color; ?>;
        --color-accent-light: <?php echo $accent_color_light; ?>;
      }
    </style>

<?php

  endif;
}

add_action('wp_head', 'diwp_generate_theme_option_css');

// =========================================================================
// REGISTER CUSTOMIZER - PANEL, SECTION, SETTINGS AND CONTROL
// =========================================================================
function theme_name_register_theme_customizer($wp_customize)
{
  // Create custom panel.
  $wp_customize->add_panel('text_blocks', array(
    'priority'       => 100,
    'theme_supports' => '',
    'title'          => __('Theme Settings', 'theme_name'),
    'description'    => __('Add your live chat script here.', 'theme_name'),
  ));
  // Add section.
  $wp_customize->add_section('custom_title_text', array(
    'title'    => __('Live Chat', 'theme-name'),
    'panel'    => 'text_blocks',
    'priority' => 10
  ));
  $wp_customize->add_section('call_to_action', array(
    'title'    => __('Call to action', 'theme-name'),
    'panel'    => 'text_blocks',
    'priority' => 15
  ));
  // Add setting
  $wp_customize->add_setting('cta_modal_code', array());
  $wp_customize->add_setting('cta_button_text', array());
  $wp_customize->add_setting('title_text_block', array());
  // Add control
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'custom_title_text',
      array(
        'label'    => __('Live Chat Code', 'theme_name'),
        'section'  => 'custom_title_text',
        'settings' => 'title_text_block',
        'type'     => 'textarea',
        'input_attrs' => array(
          'placeholder' => __('Paste your script here!'),
        ),
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'call_to_action_two',
      array(
        'label'    => __('Button Text', 'button_text'),
        'section'  => 'call_to_action',
        'settings' => 'cta_button_text',
        'type'     => 'text',
        'description' => __('This is a custom text box.'),
        'input_attrs' => array(
          'placeholder' => __('ACTION'),
        ),
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      'call_to_action',
      array(
        'label'    => __('Modal Code', 'theme_name'),
        'section'  => 'call_to_action',
        'settings' => 'cta_modal_code',
        'type'     => 'textarea',
        'input_attrs' => array(
          'placeholder' => __('Paste your script here!'),
        ),
      )
    )
  );
}
add_action('customize_register', 'theme_name_register_theme_customizer');


function add_footer_scripts()
{
  echo get_theme_mod('title_text_block');
}
add_action('wp_footer', 'add_footer_scripts');

function add_specific_menu_location_atts($atts, $item, $args)
{
  // check if the item is in the primary menu
  if ($args->theme_location == 'action-menu') {
    // add the desired attributes:
    $atts['aria-controls'] = 'modal-name-1';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);

add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

// Add codyhouse page trans link to main menu
function wpse156165_menu_add_class($atts, $item, $args)
{
  $class = 'js-page-trans-link'; // or something based on $item
  $atts['class'] = $class;
  return $atts;
}
// Add codyhouse page trans link to the_category
function irbyone_category_class($thelist)
{
  $categories = get_the_category();

  if (!$categories || is_wp_error($categories)) {
    return $thelist;
  }

  $output = '<ul class="post-categories">';
  foreach ($categories as $category) {
    $output .= '<li class="category-' . $category->slug . '"><a class="js-page-trans-link" href="' . esc_url(get_category_link($category->term_id)) . '">' . '<span>' . $category->name . '</span>' . '</a></li>';
  }
  $output .= '</ul>';

  return $output;
}
add_filter('the_category', 'irbyone_category_class');

// Sanitize Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function ($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  $content = str_replace('<br />', '', $content);

  return $content;
});

function get_breadcrumb()
{
  if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<ol class="article__bread-crumb"><li>', '</li></ol>');
  }
}

function add_categories($classes = '')
{

  $categories = get_the_category();
  foreach ($categories as $category) {
    $classes[] = 'category-' . $category->slug;
  }
  return $classes;
}
add_filter('body_class', 'add_categories');

if (!function_exists('shape_posted_on')) :
  /**
   * Prints HTML with meta information for the current post-date/time and author.
   *
   * @since Shape 1.0
   */
  function shape_posted_on()
  {
    printf(
      __('Posted on <a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> by <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'shape'),
      esc_url(get_permalink()),
      esc_attr(get_the_time()),
      esc_attr(get_the_date('c')),
      esc_html(get_the_date()),
      esc_url(get_author_posts_url(get_the_author_meta('ID'))),
      esc_attr(sprintf(__('View all posts by %s', 'shape'), get_the_author())),
      esc_html(get_the_author())
    );
  }
endif;

function reading_time()
{
  $content = get_post_field('post_content', $post->ID);
  $word_count = str_word_count(strip_tags($content));
  $readingtime = ceil($word_count / 200);

  if ($readingtime == 1) {
    $timer = " minute";
  } else {
    $timer = " minutes";
  }
  $totalreadingtime = $readingtime . $timer;

  return $totalreadingtime;
}

/**
 * Returns true if a blog has more than 1 category
 *
 * @since Shape 1.0
 */
function shape_categorized_blog()
{
  if (false === ($all_the_cool_cats = get_transient('all_the_cool_cats'))) {
    // Create an array of all the categories that are attached to posts
    $all_the_cool_cats = get_categories(array(
      'hide_empty' => 1,
    ));

    // Count the number of categories that are attached to the posts
    $all_the_cool_cats = count($all_the_cool_cats);

    set_transient('all_the_cool_cats', $all_the_cool_cats);
  }

  if ('1' != $all_the_cool_cats) {
    // This blog has more than 1 category so shape_categorized_blog should return true
    return true;
  } else {
    // This blog has only 1 category so shape_categorized_blog should return false
    return false;
  }
}

/**
 * Flush out the transients used in shape_categorized_blog
 *
 * @since Shape 1.0
 */
function shape_category_transient_flusher()
{
  // Like, beat it. Dig?
  delete_transient('all_the_cool_cats');
}
add_action('edit_category', 'shape_category_transient_flusher');
add_action('save_post', 'shape_category_transient_flusher');


function acf_load_color_field_choices($field)
{
  // reset choices
  $field['choices'] = array();
  $blogusers = get_users();
  $field['choices'][0] = "Select User";
  foreach ($blogusers as $user) {
    // append to choices
    $field['choices'][$user->ID] = $user->display_name;
  }
  // return the field
  return $field;
}

add_filter('acf/load_field/name=select_user_for_post', 'acf_load_color_field_choices');

function add_custom_class_to_first_post($classes)
{
  global $wp_query; // Get the current query being run.

  // Check if this post in the current loop is the first post. The list starts from 0.
  if ($wp_query->current_post === 0)
    $classes[] = 'first-post-custom-class';

  return $classes;
}
add_filter('post_class', 'add_custom_class_to_first_post');

function custom_user_profile_position_field($methods)
{
  $methods['position'] = 'Position';
  return $methods;
}
add_action('user_contactmethods', 'custom_user_profile_position_field');

require_once(__DIR__ . '/includes/functions/services.php');
require_once(__DIR__ . '/includes/functions/projects.php');
require_once(__DIR__ . '/includes/functions/testimonials.php');


?>