<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

//////////////////////////////////////////////GENERAL SETTINGS START////////////////////////////////////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'desc' => __('Enter Site name .', 'options_check'),
		'id' => 'sitename',
		'type' => 'text');
		
	/* $options[] = array(
		'name' => __('Upload Logo', 'options_check'),
		'desc' => __('Upload Logo', 'options_check'),
		'id' => 'logos',
		'type' => 'upload');*/
	
	$options[] = array(
		'name' => __('Upload Favicon Image', 'options_check'),
		'desc' => __('Upload Your favicon.ico [16x16 PX]', 'options_check'),
		'id' => 'fav',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Telephone No', 'options_check'),
		'desc' => __('Enter Telephone', 'options_check'),
		'id' => 'tel',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail', 'options_check'),
		'desc' => __('Enter E-mail', 'options_check'),
		'id' => 'email',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Address', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'address',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	/*$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'desc' => __('Enter Footer Copyright Text .', 'options_check'),
		'id' => 'copyright_ftext',
		'type' => 'text');*/
	
//////////////////////////////////////////////GENERAL SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////SOCIAL LINK SETTINGS START////////////////////////////////////////////////////////////////////
	
	$options[] = array(
		'name' => __('Follow Us Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Instagram Link', 'options_check'),
		'desc' => __('Enter Your Instagram Page Link', 'options_check'),
		'id' => 'in_link',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Tumblr Link', 'options_check'),
		'desc' => __('Enter Your Tumblr Page Link', 'options_check'),
		'id' => 't_link',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Pinterest Link', 'options_check'),
		'desc' => __('Enter Your Pinterest Page Link', 'options_check'),
		'id' => 'p_link',
		'type' => 'text');
		
	/*	$options[] = array(
		'name' => __('Google Plus Link', 'options_check'),
		'desc' => __('Enter Your Google Plus Page Link', 'options_check'),
		'id' => 'gplus_link',
		'std' => 'http://www.plus.google.com',
		'type' => 'text');*/
/*		
	$options[] = array(
		'name' => __('RSS Link', 'options_check'),
		'desc' => __('Enter Your RSS Link', 'options_check'),
		'id' => 'rss_link',
	    'std' => 'http://www.rss.com',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('RSS Link', 'options_check'),
		'desc' => __('Enter Your RSS Link', 'options_check'),
		'id' => 'rss_link',
	    'std' => 'http://www.rss.com',
		'type' => 'text');*/


//////////////////////////////////////////////SOCIAL LINK SETTINGS END////////////////////////////////////////////////////////////////////


//////////////////////////////////////////////Our Services START////////////////////////////////////////////////////////////////////
   /* $options[] = array(
		'name' => __('INSTRUCTIONS', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Brief about INSTRUCTIONS', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'brief',
		'type' => 'text',
		'settings' => $wp_editor_settings );
	
	$options[] = array(
		'name' => __('Step 1. Text :', 'options_check'),
		'id' => 's1',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Step 1. Image:', 'options_check'),
		'id' => 'img1',
		'std' => '',
		'type' => 'upload');
		
	
		
	$options[] = array(
		'name' => __('Step 2. Text :', 'options_check'),
		'id' => 's2',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Step 2. Image:', 'options_check'),
		'id' => 'img2',
		'std' => '',
		'type' => 'upload');
		

	$options[] = array(
		'name' => __('Step 3. Text :', 'options_check'),
		'id' => 's3',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Step 3. Image:', 'options_check'),
		'id' => 'img3',
		'std' => '',
		'type' => 'upload');*/
		
	
		
//////////////////////////////////////////////Our Services END////////////////////////////////////////////////////////////////////
	

//////////////////////////////////////////////CMS SETTINGS START////////////////////////////////////////////////////////////////////
    $options[] = array(
		'name' => __('CMS Setting', 'options_check'),
		'type' => 'heading');
	
	/*$options[] = array(
		'name' => __('Google Map', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'map1',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
	$options[] = array(
		'name' => __('Location Title', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'lacation-text',
		'type' => 'text',
		'settings' => $wp_editor_settings );*/
		
	$options[] = array(
		'name' => __('Homepage Content', 'options_check'),
		'desc' => sprintf( __( 'Enter Text Below:', 'options_check' ), '' ),
		'id' => 'h_content',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
				
//////////////////////////////////////////////CMS SETTINGS END////////////////////////////////////////////////////////////////////
	
	

	return $options;
}
?>