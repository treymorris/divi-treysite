<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/header.js', array(), '1.0.0' , true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/jqueryscripts.js', array( 'jquery' ), '1.0.0' , true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Mime Types Support REMOVE AFTER UPLOAD OF FONTS IS COMPLETE!!*/
// add_filter('upload_mimes', 'custom_mime_types', 999999);

// function custom_mime_types($mimes) {
//   $mimes['otf'] = 'application/x-font-opentype';
//   $mimes['woff'] = 'application/font-woff';
//   $mimes['woff2'] = 'application/font-woff2';
//   return $mimes;
// }

/* Custom Font Types Support REMOVE AFTER UPLOAD OF FONTS IS COMPLETE!!*/
// add_filter('et_pb_supported_font_formats', 'custom_font_formats', 1);

// function custom_font_formats() { 
// return array('otf', 'woff', 'woff2');
// }




// Make the Video URL field Dynamic

add_filter('et_builder_get_parent_modules', function($modules){
foreach ($modules as $module_slug => $module) {
if($module_slug === 'et_pb_video' && isset($module->fields_unprocessed)){
$module->fields_unprocessed['src']['dynamic_content'] = 'url';
$module->fields_unprocessed['src_webm']['dynamic_content'] = 'url';
}
}
return $modules;
});



// Begin remove Divi Blog Module featured image crop
function pa_blog_image_width($width) {
	return '9999';
}
function pa_blog_image_height($height) {
	return '9999';
}
add_filter( 'et_pb_blog_image_width', 'pa_blog_image_width' );
add_filter( 'et_pb_blog_image_height', 'pa_blog_image_height' );
// End remove Divi Blog Module featured image crop