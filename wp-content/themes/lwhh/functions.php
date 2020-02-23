<?php

function lwhh_bootstaping(){
	load_theme_textdomain('lwhh');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
	register_nav_menu("topmenu", __("Top Menu", "lwhh"));
	register_nav_menu("footermenu", __("Footer Menu", "lwhh"));

}
add_action('after_setup_theme','lwhh_bootstaping');



//style & javascript ofile load
function lwhh_scripts(){
	wp_enqueue_style('lwhh', get_stylesheet_uri(), null, time());
	wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style("featherlight-css", "//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css");

	wp_enqueue_script('fetherlight-js','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array('jquery'), '0.0.1', true);

	wp_enqueue_script('lwhh-main', get_theme_file_uri()."/assets/js/main.js", array("jquery"), null, time(), true);
}

add_action('wp_enqueue_scripts','lwhh_scripts');

/**
 * Add a sidebar.
 */
function lwhh_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Sidebar 1', 'lwhh' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Right side bar', 'lwhh' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    //footer leat copy left section
    register_sidebar( array(
        'name'          => __( 'Footer Left', 'lwhh' ),
        'id'            => 'footer-left',
        'description'   => __( 'widgetied area left', 'lwhh' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    //footer leat copy right section
    register_sidebar( array(
        'name'          => __( 'Footer Right', 'lwhh' ),
        'id'            => 'footer-right',
        'description'   => __( 'widgetied area right', 'lwhh' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'lwhh_sidebar' );

function lwhh_channel_nav_class($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'lwhh_channel_nav_class' , 10, 4 );








