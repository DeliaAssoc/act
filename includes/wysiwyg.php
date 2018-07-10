<?php 

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'White Small Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-sm white-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'White Medium Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-md white-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'White Large Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-lg white-bg',
			'wrapper' => false,
		),
		array(  
			'title' => 'Accent Small Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-sm accent-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Accent Medium Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-md accent-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Accent Large Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-lg accent-bg',
			'wrapper' => false,
		),
		array(  
			'title' => 'Lite Accent Small Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-sm ltaccent-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Lite Accent Medium Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-md ltaccent-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Lite Accent Large Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-lg ltaccent-bg',
			'wrapper' => false,
		),
		array(  
			'title' => 'Green Small Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-sm green-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Green Medium Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-md green-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Green Large Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-lg green-bg',
			'wrapper' => false,
		),       
		array(  
			'title' => 'Red Small Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-sm red-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Red Medium Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-md red-bg',
			'wrapper' => false,
        ),
        array(  
			'title' => 'Red Large Button',  
			'selector' => 'a',  
			'classes' => 'btn btn-lg red-bg',
			'wrapper' => false,
		),
	);  
  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array[ 'style_formats' ] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  