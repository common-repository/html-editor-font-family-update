<?php
/*
Plugin Name: HTML Editor Font Family Update 
Plugin URI: http://connermccall.com
Description: Updates font family in the HTML editor to old styles
Version: .5
Author: Conner McCall
Author URI: http://connermccall.com
License: GPL2
*/
add_action('admin_print_styles','html_editor_font_face_admin');
function html_editor_font_face_admin() {
	wp_register_style('admin-font-face-update',plugins_url( 'font-face-admin/font-face-style.css' , dirname(__FILE__) ),array('colors'));
	wp_enqueue_style('admin-font-face-update');
}
?>
