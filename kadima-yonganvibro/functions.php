<?php
function kadima_enqueue_styles() {
    /* If using a child theme, auto-load the parent theme style. */
    if ( is_child_theme() ) {
        wp_enqueue_style( 'parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
    /* Always load active theme's style.css. */
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //wp_dequeue_style( 'parent-style' );
}
add_action( 'wp_enqueue_scripts', 'kadima_enqueue_styles' );

add_action('admin_head', 'admin_style');
function admin_style() {
    //wp_enqueue_style( "admin-my", trailingslashit(get_template_directory_uri()). "../kadima-yonganvibro/admin.css" );
}
remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');

//去除header冗余代码
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');

function wp_dashboard_widget_function() {
	echo '关于云聪<br/>我们致立于为中小企业提供一站式外贸电商解决方案，专注于跨境电商平台效果提升。云聪在帮助中小企业在电商之路获得成功的同时不忘初心 —— "一帮人一起为社会做一件有意义的事情"。';
}
// 创建钩子函数
function wp_add_dashboard_widgets() {
    wp_add_dashboard_widget('example_dashboard_widget', '云聪智能全网营销平台', 'wp_dashboard_widget_function');
}
// 将钩子函数挂到wp_dashboard_setup钩子上，注册新的Widget
add_action('wp_dashboard_setup', 'wp_add_dashboard_widgets' );
?>
