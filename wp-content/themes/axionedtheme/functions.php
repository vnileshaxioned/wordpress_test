<?php

add_action('wp_enqueue_scripts', 'test_theme_script');
function test_theme_script() {
  wp_enqueue_style('custom-styling', get_stylesheet_uri());
  wp_enqueue_style('custom-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_script('custom-script', get_template_directory_uri().'/assets/js/script.js', array('custom-jquery'), '', true);
  wp_enqueue_script('custom-jquery', get_stylesheet_directory_uri().'/assets/vendor/jquery-1.8.3.min.js', '', '', true);
  wp_localize_script( 'custom-script', 'ajax', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
}

add_action("wp_ajax_filter_tab", "filter_tab");
add_action("wp_ajax_nopriv_filter_tab", "filter_tab");
function filter_tab() {
  $args = array(
    'post_type' => 'work',
    'orderby' => 'title',
    'order' =>'ASC',
    'post_status' => 'publish',
    'posts_per_page' => $_POST['post_per_page'],
    'tax_query' => array(
      array(
        'taxonomy' => 'Tags',
        'field' => 'slug',
        'terms' => $_POST['tag_name']
      )
    )
  );

  $query = new WP_Query($args);
  if ($query->have_posts()) {
    $output = array();
    while ($query->have_posts()) {
      $query->the_post();
      $title = get_the_title();
      $description = get_the_excerpt();
      $permalink = get_the_permalink();
      $image = get_field('image')['url'] ? get_field('image')['url'] : null;
      $image_alt = get_field('image')['alt'] ? get_field('image')['alt'] : $title;

      if ($title || $description || $image || $permalink) {
      
        $result = '';
        $result .= '<li class="work-list">';
        $result .= '<a href="'. $permalink .'">';
        $result .= '<figure>';
        $result .= '<img src="'.$image .'" alt="'. $image_alt .'">';
        $result .= '</figure>';
        $result .= '<div class="content">';
        $result .= $title ? '<h2 class="work-heading">'. $title .'</h2>' : null;
        $result .= $description ? '<p class="work-paragraph">'. $description .'</p>' : null;
        $result .= '</div>';
        $result .= '</a>';
        $result .= '</li>';
        
        array_push($output, $result);
      }
    }
    wp_reset_postdata();
    echo json_encode($output);
    die();
  }
}

add_action('after_setup_theme', 'test_theme_setup');
function test_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-logo' );
  register_nav_menus( array(
    'primary' => __('Primary Menu', 'axionedtheme'),
    'secondary' => __('Secondary Menu', 'axionedtheme')
  ) );
}

add_action( 'init', 'work_post_type');
function work_post_type() {
  $labels = array(
    'name'                => _x( 'Work', 'Post Type General Name', 'axionedtheme' ),
    'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'axionedtheme' ),
    'menu_name'           => __( 'Work', 'axionedtheme' ),
    'all_items'           => __( 'All Work', 'axionedtheme' ),
    'add_new'             => __( 'Add New', 'axionedtheme' ),
    'edit_item'           => __( 'Edit Work', 'axionedtheme' ),
    'update_item'         => __( 'Update Work', 'axionedtheme' ),
    'search_items'        => __( 'Search Work', 'axionedtheme' ),
    'not_found'           => __( 'Not Found', 'axionedtheme' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'axionedtheme' ),
  );
  $args = array(
    'label'               => __( 'work', 'axionedtheme' ),
    'description'         => __( 'work description', 'axionedtheme' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-portfolio',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => true,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'work', $args );
}

add_action( 'init', 'custom_tag_taxonomy');
function custom_tag_taxonomy() {
  $labels = array(
    'name' => _x('Tags', 'taxonomy general name'),
    'singular_name' => _x('Tag', 'taxonomy_singular_name'),
    'search_items' => __('Search Tags'),
    'all items' => __('All Tags'),
    'parent_item' => __('Parent Tag'),
    'parent_item_colon' => __('Parent Tag:'),
    'edit_item' => __('Edit Tag'),
    'update_item' => __('Update Tag'),
    'add_new_item' => __('Add New Tag'),
    'new_item_name' => __('New Tag Name'),
    'menu_name' => __('Tags'),
  );

  register_taxonomy('Tags', array('work'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

add_filter('use_block_editor_for_post', '__return_false');

?>