<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box. Optional since 4.1.5
	'id' => 'personal',

	// Meta box title - Will appear at the drag and drop handle bar. Required.
	'title' => 'Video Link',

	// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
	'pages' => array( 'video'),

	// Where the meta box appear: normal (default), advanced, side. Optional.
	'context' => 'normal',

	// Order of meta box: high (default), low. Optional.
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			// Field name - Will be used as label
			'name'		=> 'Video ID',
			// Field ID, i.e. the meta key
			'id'		=> $prefix .'video_url',
			// Field description (optional)
			'desc'		=> 'Ex: http://www.youtube.com/watch?v=<mark>91UpnieKYTs</mark>&feature=related',
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone'		=> false,
			'type'		=> 'text',
			// Default value (optional)
			'std'		=> '91UpnieKYTs'
		),
		
		
		
	
		
	),
	'validation' => array(
		'rules' => array(
			// optionally make post/page title required
			'post_title' => array(
				'required' => true
			),
			$prefix . 'fname' => array(
				'required' => true
			),
			"{$prefix}pass" => array(
				'required' => true,
				'minlength' => 7,
			),
			"{$prefix}pass_confirm" => array(
				'equalTo' => "{$prefix}pass"
			)
		),
		// optional override of default jquery.validate messages
		'messages' => array(
			$prefix . 'fname' => array(
				'required' => 'Your name is required'
			),
			"{$prefix}pass" => array(
				'required' => 'Password is required',
				'minlength' => 'Password must be at least 7 characters'
			),
			"{$prefix}pass_confirm" => array(
				'equalTo' => 'Please enter the same password'
			)
		)
	)
);




/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );