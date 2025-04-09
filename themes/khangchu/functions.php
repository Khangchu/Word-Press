<?php
function load_Css_Bootstrap(){
    wp_enqueue_style( "css_bootstrap", get_template_directory_uri(). '/css/bootstrap.min.css',array(),"1.0.3", "all" );
}
function load_Js_Bootstrap () {
wp_enqueue_script( "js_bootstrap", get_template_directory_uri().'/js/bootstrap.min.js',"jquery", '1.0.1', true );
}
function customCss () {
    wp_enqueue_style( "custom_css",  get_template_directory_uri(). '/css/custom.css', array(),"1.0.0", "all" );
}
function header_css () {
    wp_enqueue_style( "header_css",  get_template_directory_uri(). '/css/header.css', array(),"1.0.0", "all" );
}
function animate_css () {
    wp_enqueue_style( "animate_css",  get_template_directory_uri(). '/css/animate.min.css', array(),"1.0.0", "all" );
}
function style_css () {
    wp_enqueue_style( "style_css",  get_template_directory_uri(). '/style.css', array(),"1.0.0", "all" );
}
function responsiv_css () {
    wp_enqueue_style( "responsiv_css",  get_template_directory_uri(). '/css/style.responsiv.css', array(),"1.0.0", "all" );
}
function show_js () {
    wp_enqueue_script( "show_js",  get_template_directory_uri(). '/js/show.js', "jquery", '1.0.1', true );
}
function trangchu_css () {
    wp_enqueue_style( "trangchu_css",  get_template_directory_uri(). '/css/trangchu.css', array(),"1.0.0", "all" );
}
function gioithieu_css () {
    wp_enqueue_style( "gioithieu_css",  get_template_directory_uri(). '/css/gioithieu.css', array(),"1.0.0", "all" );
}
function tintuc_css () {
    wp_enqueue_style( "tintuc_css",  get_template_directory_uri(). '/css/tintuc.css', array(),"1.0.0", "all" );
}
add_action("wp_enqueue_scripts","load_Js_Bootstrap");
add_action("wp_enqueue_scripts","load_Css_Bootstrap");
add_action( "wp_enqueue_scripts", "customCss" );
add_action( "wp_enqueue_scripts", "header_css" );
add_action( "wp_enqueue_scripts", "animate_css" );
add_action( "wp_enqueue_scripts", "style_css" );
add_action( "wp_enqueue_scripts", "responsiv_css" );
add_action( "wp_enqueue_scripts", "show_js" );
add_action( "wp_enqueue_scripts", "trangchu_css" );
add_action( "wp_enqueue_scripts", "gioithieu_css" );
add_action( "wp_enqueue_scripts", "tintuc_css" );
add_theme_support('post-thumbnails')
?>