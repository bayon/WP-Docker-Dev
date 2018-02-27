<?php
//add scripts
function BannerFull_scripts(){
	//add css
	wp_enqueue_style('BannerFull-style',plugins_url().'/BannerFull/css/style.css');
	//add js
	wp_enqueue_script('BannerFull-script',plugins_url().'/BannerFull/js/main.js');
}

add_action('wp_enqueue_scripts','BannerFull_scripts');