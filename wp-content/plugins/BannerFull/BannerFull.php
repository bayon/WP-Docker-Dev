<?php 
/*
Plugin Name: BannerFull
Plugin URI: http://foo.com
Description:  A BannerFull Widget , foundation for Custom Widget Building.
Version: 1.0
Author: BannerFull g
Author URI: http://foo.com
License: none
*/
/*
if(!defined('ABSPATH')){
	exit;
}
*/
//Load Styles and Scripts
require_once(plugin_dir_path(__FILE__).'/includes/BannerFull-scripts.php');
//Load Class
require_once(plugin_dir_path(__FILE__).'/includes/BannerFull-class.php');
//Register Widget
function register_BannerFull(){
	//Widget Class Name
	register_widget('BannerFull_Widget');
}
//Hook In
add_action('widgets_init','register_BannerFull');