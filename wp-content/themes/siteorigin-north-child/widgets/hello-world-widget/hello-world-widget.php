<?php
/*
Widget Name: Hello world widget
Description: An example widget which displays 'Hello world!'.
Author: Me
Author URI: http://example.com
Widget URI: http://example.com/hello-world-widget-docs,
Video URI: http://example.com/hello-world-widget-video
*/

class Hello_World_Widget extends SiteOrigin_Widget {

	function __construct() {
	    //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.

	    //Call the parent constructor with the required arguments.
	    parent::__construct(
	        // The unique id for your widget.
	        'hello-world-widget',

	        // The name of the widget for display purposes.
	        __('Hello World Widget', 'hello-world-widget-text-domain'),

	        // The $widget_options array, which is passed through to WP_Widget.
	        // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
	        array(
	            'description' => __('A hello world widget.', 'hello-world-widget-text-domain'),
	            'help'        => 'http://example.com/hello-world-widget-docs',
	        ),

	        //The $control_options array, which is passed through to WP_Widget
	        array(
	        ),

	        //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
	        array(
	            'text' => array(
	                'type' => 'text',
	                'label' => __('Hello world! goes here.', 'siteorigin-widgets'),
	                'default' => 'Hello world!'
	            ),
	        ),

	        //The $base_folder path string.
	        plugin_dir_path(__FILE__);
	    );
	}

   function get_template_name($instance) {
	    return 'hello-world-template';
	}

	function get_template_dir($instance) {
	    return 'hw-templates';
	}
	/*
	You can supply a LESS stylesheet for your widget by overriding the get_style_name function and returning the name of the LESS stylesheet, without a .less file extension. The base SiteOrigin_Widget class looks for a LESS file in a styles directory, in the widget directory.

	You can find more detail about the use of LESS in the Widgets Bundle here.
		https://siteorigin.com/docs/widgets-bundle/templating/less-stylesheets/

	function get_style_name($instance) {
	    return 'my-widget-styles';
	}
	*/
}

siteorigin_widget_register('hello-world-widget', __FILE__, 'Hello_World_Widget');

/*
function my_awesome_widget_banner_img_src( $banner_url, $widget_meta ) {
    if( $widget_meta['ID'] == 'my-awesome-widget') {
        $banner_url = plugin_dir_url(__FILE__) . 'images/awesome_widget_banner.svg';
    }
    return $banner_url;
}
add_filter( 'siteorigin_widgets_widget_banner', 'my_awesome_widget_banner_img_src', 10, 2);
*/




?>