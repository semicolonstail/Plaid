<?php
/*
	==========================================
	 Custom Post Type
	==========================================
*/

function plaid_custom_post_type(){
  $labels = array(
		'name' => 'Project',
		'singular_name' => 'Project',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Project',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
    'show_in_rest' => true,
    'rest_base' => 'project',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
	);
	register_post_type('project',$args);
}

add_action('init','plaid_custom_post_type');



/*
	==========================================
	 Custom Taxonomy
	==========================================
*/

function plaid_custom_taxonomies(){

//register new hierarchical taxonomy:courses

  $labels = array(
		'name' => 'Courses',
		'singular_name' => 'Course',
		'search_items' => 'Search Courses',
		'all_items' => 'All Courses',
		'parent_item' => 'Parent Course',
		'parent_item_colon' => 'Parent Course:',
		'edit_item' => 'Edit Course',
		'update_item' => 'Update Course',
		'add_new_item' => 'Add New Work Course',
		'new_item_name' => 'New Course Name',
		'menu_name' => 'Courses'
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'course' )
	);

	register_taxonomy('course', array('project'), $args);




  //register new none hierarchical taxonomy:style

  $labels = array(
		'name' => 'Styles',
		'singular_name' => 'Style',
		'search_items' => 'Search Styles',
		'all_items' => 'All Styles',
		'parent_item' => 'Parent Style',
		'parent_item_colon' => 'Parent Style:',
		'edit_item' => 'Edit Style',
		'update_item' => 'Update Style',
		'add_new_item' => 'Add New Work Style',
		'new_item_name' => 'New Style Name',
		'menu_name' => 'Styles'
	);

	$args = array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'style' )
	);

	register_taxonomy('style', array('project'), $args);
}

add_action('init','plaid_custom_taxonomies');
