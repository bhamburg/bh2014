<?php

// Make background customizable
if(function_exists('add_custom_background')) {
	add_custom_background('set_theme_background');

	function set_theme_background() {
		$bgimage = get_background_image();
		$bgcolor = get_background_color();
		
		echo "<style type='text/css'>\n";
		 
		if(!empty($bgimage)) {
			$background_styles = 'background-image: url(\'' . get_theme_mod('background_image', '') . '\');'
			. ' background-repeat: ' . get_theme_mod('background_repeat', 'repeat') . ';'
			. ' background-position: top ' . get_theme_mod('background_position_x', 'left') .  ';' . 'background-attachment: '. get_theme_mod('background_attachment', 'scroll');
			echo "body { ".$background_styles."); } \n";
		} 
		if(!empty($bgcolor)) {
			echo "body { background-color: #".$bgcolor."; }; \n";
		}
		if(empty($bgimage) && empty($bgcolor)) {
			echo "body { background: url(".bloginfo('url')."/images/Center-City-1024-black-blurred.jpg); }\n";
		}
		echo "</style>";
	}
}

// Add featured image support
add_theme_support('post-thumbnails');

//Widgetize Sidebar
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class="one-third column">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

// Add new post type for Project upon WordPress initialization
add_action('init', 'project_init');

function project_init() 
{
    //Labels for custom post type.
    $project_labels = array(
        'name' => _x('Projects', 'post type general name'),
        'singular_name' => _x('Project', 'post type singular name'), 
        'all_items' => __('All Projects'),
        'add_new' => _x('Add new project', 'project'),
        'add_new_item' => __('Add new project'),
        'edit_item' => __('Edit project'),
        'new_item' => __('New project'),
        'view_item' => __('View project'),
        'search_items' => __('Search in project'),
        'not_found' =>  __('No project found'),
        'not_found_in_trash' => __('No project found in trash'), 
        'parent_item_colon' => ''
    );
    
//Arguments
    $args = array(
        'labels' => $project_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'taxonomies' => array('project-cat'),
        'has_archive' => true
    ); 
    register_post_type('projects',$args);
}

//Add new taxonomy upon WordPress initialization
add_action( 'init', 'project_create_taxonomies', 0 );

function project_create_taxonomies() 
{
    // Project Categories
    register_taxonomy('project-cat',array('project'),array(
        'hierarchical' => true,
        'label' => 'Project Categories',
        'singular_name' => 'Project Category',
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project-cat' )
    ));
}

// Add div to embedded video
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;

function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}
?>