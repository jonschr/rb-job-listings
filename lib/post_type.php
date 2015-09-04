<?php

function rb_register_job_listings_post_type() {
	$labels = array(
		'name' => 'Job Listings',
		'singular_name' => 'Job Listing',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Job Listing',
		'edit_item' => 'Edit job listing',
		'new_item' => 'New job listing',
		'view_item' => 'View job listing',
		'search_items' => 'Search job listings',
		'not_found' =>  'No job listings found',
		'not_found_in_trash' => 'No job listings found in trash',
		'parent_item_colon' => '',
		'menu_name' => 'Job Listings'
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
		'supports' => array( 'title','editor', 'excerpt' )
	); 
	register_post_type( 'joblistings', $args );
}
add_action( 'init', 'rb_register_job_listings_post_type' );