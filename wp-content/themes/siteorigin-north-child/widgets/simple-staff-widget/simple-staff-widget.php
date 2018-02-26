<?php

/*
Widget Name: Simple Staff Widget
Description: An example widget which displays 'Simple Staff Widget!'.
Author: Me
Author URI: http://example.com
Widget URI: http://example.com/simple-staff-widget-docs,
Video URI: http://example.com/simple-staff-widget-video
*/

class Simple_Staff_Widget extends SiteOrigin_Widget {

	function get_template_name($instance) {
		return '';
	}

	function get_style_name($instance) {
		return '';
	}
}

siteorigin_widget_register('simple-staff-widget', __FILE__, 'Simple_Staff_Widget');