<?php
/*
Plugin Name: Extra Widgets for SiteOrigin
*/


/* Define Custom Widgets Location and Include them */
function add_my_awesome_widgets_collection($folders){
     $folders[] = plugin_dir_path(__FILE__).'extra-widgets/widgets/hello-world-widget/' ;
     //print_r($folders);
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_awesome_widgets_collection');

?>