<?php
//register menu
register_nav_menu( 'primary', 'Primary Menu' );

//register js
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}    
 

//reg post type
add_action('wp_enqueue_scripts', 'my_scripts_method');

function codex_custom_init() {
  $labels = array(
    'name' => _x('Videos', 'post type general name'),
    'singular_name' => _x('Video', 'post type singular name'),
    'add_new' => _x('Add New', 'Video'),
    'add_new_item' => __('Add New Video'),
    'edit_item' => __('Edit Video'),
    'new_item' => __('New Video'),
    'all_items' => __('All Video'),
    'view_item' => __('View Video'),
    'search_items' => __('Search Videos'),
    'not_found' =>  __('No Videos found'),
    'not_found_in_trash' => __('No Videos found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => __('Videos')

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('category')
  ); 
  register_post_type('video',$args);
}
add_action( 'init', 'codex_custom_init' );

include 'demo.php';


?>

