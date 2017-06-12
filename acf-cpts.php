<?php 

/*
Plugin Name: Advanced Custom Fields: Custom Post Types
Plugin URI:  https://github.com/effigy11/acf-cpts-plugin
Description: Create and manage custom post types - Requires Advanced Custom Fields Plugin
Version:     1.0.6
Author:      EffigyLabs
Author URI:  http://effigy.com.au
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: effigylabs
*/

if( ! class_exists( 'ACF_CPTS_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new ACF_CPTS_Updater( __FILE__ );
$updater->set_username( 'effigy11' );
$updater->set_repository( 'acf-cpts-plugin' );
$updater->initialize();


	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Advanced Custom Fields: Custom Post Types',
			'menu_title'	=> 'Custom Post Types',
			'menu_slug'  	=> 'acf-custom-post-types',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}
	
	if( function_exists('acf_add_local_field_group') ):
	
	acf_add_local_field_group(array (
		'key' => 'group_568f034fc9c37',
		'title' => 'Add Custom Post Types',
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-custom-post-types',
				),
			),
		),
		'fields' => array (
			array (
				'key' => 'field_568f13eaa24da',
				'label' => 'Custom Post Types',
				'name' => 'custom_post_types',
				'type' => 'repeater',
				'instructions' => 'Create and manage custom post types with the ACF plugin.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => 'field_568f1428a24dc',
				'min' => '',
				'max' => '',
				'layout' => 'block',
				'button_label' => 'Add New CPT',
				'sub_fields' => array (
					array (
						'key' => 'field_568f1428a24dc',
						'label' => 'Plural Label',
						'name' => 'plural_label',
						'type' => 'text',
						'instructions' => 'General name for the post type, usually plural (e.g. Portfolio).',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_568f140fa24db',
						'label' => 'Singular Label',
						'name' => 'singular_label',
						'type' => 'text',
						'instructions' => 'Name for one object of this post type (e.g. Portfolio post).',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_568f2fd8f2478',
						'label' => 'Slug',
						'name' => 'slug',
						'type' => 'text',
						'instructions' => 'URL friendly version of the custom post type (e.g. portfolio). Important: Only lowercase letters, numbers, hyphens and underscores. Max. 20 characters.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_568f2f7af2476',
						'label' => 'Has Archive?',
						'name' => 'archive',
						'type' => 'true_false',
						'instructions' => 'Enables post type archives. Will use the post type as archive-slug.php by default.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'message' => '',
						'default_value' => 0,
					),
					array (
						'key' => 'field_568f2facf2477',
						'label' => 'Exclude from search?',
						'name' => 'exclude_from_search',
						'type' => 'true_false',
						'instructions' => 'Whether to exclude posts with this post type from front end search results.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'message' => '',
						'default_value' => 0,
					),
					array (
						'key' => 'field_568f14a5a24de',
						'label' => 'Supports',
						'name' => 'supports',
						'type' => 'checkbox',
						'instructions' => 'Select which WP features this CPT will support',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'title' => 'title',
							'editor' => 'editor',
							'author' => 'author',
							'thumbnail' => 'thumbnail',
							'excerpt' => 'excerpt',
							'trackbacks' => 'trackbacks',
							'custom-fields' => 'custom-fields',
							'comments' => 'comments',
							'revisions' => 'revisions',
							'page-attributes' => 'page-attributes',
							'post-formats' => 'post-formats',
						),
						'default_value' => array (
							0 => 'title',
							1 => 'editor',
							2 => 'revisions',
						),
						'layout' => 'horizontal',
						'toggle' => 0,
						'return_format' => 'value',
					),
					array (
						'key' => 'field_568f1562a24df',
						'label' => 'Menu Position',
						'name' => 'menu_position',
						'type' => 'number',
						'instructions' => '<strong>Determine where this CPT will display in the admin menu</strong><br>
	5 - below Posts, 10 - below Media, 15 - below Links, 20 - below Pages, 25 - below comments, 60 - below first separator, 65 - below Plugins, 70 - below Users, 75 - below Tools, 80 - below Settings, 100 - below second separator',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'min' => '',
						'max' => '',
						'step' => '',
						'readonly' => 0,
						'disabled' => 0,
					),
					array (
						'key' => 'field_568f164da24e0',
						'label' => 'Public',
						'name' => 'public',
						'type' => 'select',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 25,
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'true' => 'True',
							'false' => 'False',
						),
						'default_value' => array (
							0 => 'true',
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
						'disabled' => 0,
						'readonly' => 0,
						'return_format' => 'value',
					),
					array (
						'key' => 'field_568f16f8a24e1',
						'label' => 'Hierarchical',
						'name' => 'hierarchical',
						'type' => 'select',
						'instructions' => 'Choose true to create child pages.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 25,
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'false' => 'false',
						),
						'default_value' => array (
						),
						'allow_null' => 0,
						'multiple' => 0,
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
						'disabled' => 0,
						'readonly' => 0,
						'return_format' => 'value',
					),
					array (
						'key' => 'field_568f2ecef2474',
						'label' => 'Custom Taxonomies',
						'name' => 'custom_taxonomies',
						'type' => 'checkbox',
						'instructions' => '(Optional) Whether to register custom category taxonomy or tags for this CPT.',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array (
							'width' => 50,
							'class' => '',
							'id' => '',
						),
						'choices' => array (
							'category' => 'Categories',
							'post_tag' => 'Tags',
						),
						'default_value' => array (
						),
						'layout' => 'horizontal',
						'toggle' => 0,
						'return_format' => 'value',
					),
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => 'Create and manage custom post types with the ACF plugin.',
		'local' => 'php'
	));
	
	endif;
	
	
	
	if( have_rows('custom_post_types', 'option') ): 
	
	add_action( 'init', 'create_acf_cpt' );
	function create_acf_cpt() {
	
	    while( have_rows('custom_post_types', 'option') ): the_row(); 
	    
	    	$singularUpperCase = get_sub_field('singular_label');
	    	$cptSlug = get_sub_field('slug');
	    	$singularLowerCase = strtolower(get_sub_field('singular_label'));
	    	$pluralUpperCase = get_sub_field('plural_label');
	    	$pluralLowerCase = strtolower(get_sub_field('plural_label'));
	    	$dashIcon = get_template_directory_uri() . '/images/effigy-dashicon.png';
	
	        $labels = 	array(
	        		    'name' => _x( $pluralUpperCase, 'post type general name'),
	        		    'singular_name' => _x( $singularUpperCase , 'post type singular name'),
	        		    'add_new' => _x('Add New', $singularUpperCase),
	        		    'add_new_item' => __('Add new '.$singularUpperCaseClient),
	        		    'edit_item' => __('Edit '.$singularLowerCase),
	        		    'new_item' => __('New '.$singularLowerCase),
	        		    'view_item' => __('View '.$singularLowerCase),
	        		    'search_items' => __('Search '.$pluralLowerCase),
	        		    'not_found' =>  __('No '.$pluralLowerCase.' found'),
	        		    'not_found_in_trash' => __('No '.$pluralLowerCase.' found in Trash'),
	        		    'parent_item_colon' => ''
	        			);
	          // Add supports here
	          // See http://codex.wordpress.org/Function_Reference/register_post_type
	          
	          $supports = get_sub_field('supports');
	          $menu_position = get_sub_field('menu_position');
	          if(get_sub_field('public') == 'true'){
		          	$public = true;
		          } else {
		          	$public = false;
		          }
	          if(get_sub_field('hierarchical') == 'true'){
		          	$hierarchical = true;
		          } else {
		          	$hierarchical = false;
		          }
	          if( get_sub_field('exclude_from_search') ){
		            $excludeSearch = true;
		          }else{
		            $excludeSearch = false;
		          }
	          if( get_sub_field('archive') ){
		            $hasArchive = true;
		          }else{
		            $hasArchive = false;
		          }
		          
	          register_post_type( 	$cptSlug ,
	        					    array(
	        					      'labels' => $labels,
	        					      'public' => $public,
	        					      'supports' => $supports,
	        					      'hierarchical' => $hierarchical,
	        					      'rewrite' => array( 'slug' => $cptSlug ),
	        					      'has_archive' => $hasArchive,
	        					      'exclude_from_search' => $excludeSearch,
	        					      'menu_icon' => $dashIcon,
	        					      'menu_position' => $menu_position // Position CPT Below Pages
	        					    )
	          );
	          
	          // CHECK IF This CPT has Category and/or Tags checks
	          $customTaxonomies = get_sub_field('custom_taxonomies');
	          if( in_array('category', (array) $customTaxonomies ) ) {
	          	create_acf_categories( $cptSlug );
	          }
	          if( in_array('post_tag', (array) $customTaxonomies) ) {
	          	create_acf_tags( $cptSlug );
	          }
	
	     endwhile;
	    }
	    
	// hook into the init action and call create_book_taxonomies when it fires
	add_action( 'init', 'create_acf_categories', 0 );
	
	// create two taxonomies, genres and writers for the post type "book"
	function create_acf_categories( $cptSlug ) {
		// Add new taxonomy, make it hierarchical (like categories)
		$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Categories' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Category' ),
		);
	
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => $cptSlug.'_category' ),
		);
		register_taxonomy( $cptSlug.'_category', array( $cptSlug ), $args );
	}
	
	// hook into the init action and call create_book_taxonomies when it fires
	add_action( 'init', 'create_acf_tags', 0 );
	
	// create two taxonomies, genres and writers for the post type "book"
	function create_acf_tags( $cptSlug ) {
		// Add new taxonomy, NOT hierarchical (like tags)
		$labels = array(
			'name'                       => _x( 'Tags', 'taxonomy general name' ),
			'singular_name'              => _x( 'Tag', 'taxonomy singular name' ),
			'search_items'               => __( 'Search Tags' ),
			'popular_items'              => __( 'Popular Tags' ),
			'all_items'                  => __( 'All Tags' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Tag' ),
			'update_item'                => __( 'Update Tag' ),
			'add_new_item'               => __( 'Add New Tag' ),
			'new_item_name'              => __( 'New Tag Name' ),
			'separate_items_with_commas' => __( 'Separate tags with commas' ),
			'add_or_remove_items'        => __( 'Add or remove tags' ),
			'choose_from_most_used'      => __( 'Choose from the most used tags' ),
			'not_found'                  => __( 'No tags found.' ),
			'menu_name'                  => __( 'Tags' ),
		);
	
		$args = array(
			'hierarchical'          => false,
			'labels'                => $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true,
			'rewrite'               => array( 'slug' => $cptSlug.'_tags' ),
		);
	
		register_taxonomy( $cptSlug.'_tags', $cptSlug , $args );
	}
	    
	endif;

?>