<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    //
     wp_enqueue_style( 'plm-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );



}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

 function joes_widget_area(){
        register_sidebar(
            array(
                'name' => 'Joes Widget Area',
                'id' => 'level_up_new_widget_area',
                'before_widget' => '<aside>',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title" >',
                'after_title' => '</h3>',

            )
        );
    }

add_action('widgets_init','joes_widget_area');

/*
Create New Widget Area Using Custom Function
https://codex.wordpress.org/Widgetizing_Themes

function wpsites_before_post_widget( $content ) {
    if ( is_singular( array( 'post', 'page' ) ) && is_active_sidebar( 'before-post' ) && is_main_query() ) {
        dynamic_sidebar('before-post');
    }
    return $content;
}
add_filter( 'the_content', 'wpsites_before_post_widget' );
*/
function get_home_page_style(){
    //HOME PAGE SPECIFIC CSS ONLY ---
    echo("
        <style>
        h2{color:#ddd !important;font-size:45px !important;line-height:.5 !important;letter-spacing:1px !important;font-weight:bold !important;}
        h3{color:#555 !important;font-size:21px !important;line-height:1 !important;letter-spacing:1px !important;font-weight:bold !important;}
        h4{color:#222 !important;font-size:16px !important;line-height:1 !important;letter-spacing:.7px !important;font-weight:bold !important;}
        </style>
    ");
}
function get_plm_page_style(){
    //HOME PAGE SPECIFIC CSS ONLY ---
     echo("
        <style>
              #content.site-content {
                  background-color: #f2f2f2;
                }
        </style>
    ");
}
/*
ISSUES ADDING A CUSTOM WIDGET TO SITEORIGINS
function joes_widget_directories( $folders ){
    // HOW TO CREAT a site origin widget https://github.com/siteorigin/docs/blob/develop/widgets-bundle/getting-started/creating-a-widget.md
    $folders[] = get_template_directory() . '/widgets/';
    return $folders;
}
add_action('siteorigin_widgets_widget_folders', 'joes_widget_directories');
 
function activate_joes_widgets(){
    if( !get_theme_mod('bundled_widgets_activated') ) {
        //SiteOrigin_Widgets_Bundle::single()->activate_widget( 'wbe-staff' );
        SiteOrigin_Widgets_Bundle::single()->activate_widget( 'wbe-simple-staff-widget' );
        set_theme_mod( 'bundled_widgets_activated', true );
    }
}
add_filter('admin_init', 'activate_joes_widgets');
*/
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

