<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php
//WP Child Theme Example Code:
//https://codex.wordpress.org/Child_Themes


/*
Unlike style.css, the functions.php of a child theme does not override its counterpart from the parent. Instead, it is loaded in addition to the parent’s functions.php. (Specifically, it is loaded right before the parent’s file.)
TIP FOR THEME DEVELOPERS. The fact that a child theme’s functions.php is loaded first means that you can make the user functions of your theme pluggable —that is, replaceable by a child theme— by declaring them conditionally. E.g.:

if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}
Referencing / Including Files in Your Child Theme:
require_once( get_stylesheet_directory() . '/my_included_file.php' );

WARNING:
add_theme_support('post-formats') will override the formats defined by the parent theme, not add to it.!
*/

