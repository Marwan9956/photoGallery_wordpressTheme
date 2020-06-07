<?php
/*
	Setup Theme

*/
function setup_theme(){
	//post thumbnails support
	add_theme_support( 'post-thumbnails' );
	/* if you want to set the thumbnails size 
	set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, resize mode
	*/
	
	//register menu  -- activate menus 
	register_nav_menus([
		'primary'  => __('Primary menu'),
		'footer'   => __('Footer menu')
	]);
	
	//post format support
	add_theme_support( 'post-formats', array('gallery' ) );
	

	
}
add_action('after_setup_theme','setup_theme');


/*
 *	Enable Sidebar widgets  
 */
function setup_widgets(){
	//register sidebar Widgets
	register_sidebar([
		'name'         =>  __('Main Sidebar'),
		'id'           =>  'main-sidebar',
		'description'  =>  'Main Sidebar',
		'before_widget'=> '<div class="widget">',
		'after_widget' => '</div>'
	]);
}
add_action('widgets_init','setup_widgets');


/*
	Adjust title to be uppercase the first letter
*/
add_filter('the_title', 'new_title');
function new_title($title) {
	return ucfirst($title);
}

