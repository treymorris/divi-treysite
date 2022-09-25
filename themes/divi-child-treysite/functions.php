<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
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