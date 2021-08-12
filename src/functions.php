<?php
register_nav_menus( array(
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',
	'social_links' => 'Social Links'
) );

/**
 * Register our sidebars and widgetized areas.
 *
 */

function right_widgets_1_init()
{
    register_sidebar(array(
        'name' => '右サイドバー (投稿一覧用)',
        'id' => 'blog_right_1',
        'before_widget' => '<section class="grid-full no-pd sidebar">',
        'after_widget' => '</section>',
        'before_title' => '<div class="content-title-wrapper"><h2 class="content-title">',
        'after_title' => '</h2></div>',
    ));
}

add_action('widgets_init', 'right_widgets_1_init');

function right_widgets_2_init()
{
    register_sidebar(array(
        'name' => '右サイドバー (Blog用)',
        'id' => 'blog_right_2',
        'before_widget' => '<section class="grid-full no-pd sidebar">',
        'after_widget' => '</section>',
        'before_title' => '<div class="content-title-wrapper"><h2 class="content-title">',
        'after_title' => '</h2></div>',
    ));
}

add_action('widgets_init', 'right_widgets_2_init');

function right_widgets_3_init()
{
    register_sidebar(array(
        'name' => 'フロントページサイドバー',
        'id' => 'blog_right_3_front_page',
        'before_widget' => '<section class="grid-full no-pd sidebar">',
        'after_widget' => '</section>',
        'before_title' => '<div class="content-title-wrapper"><h2 class="content-title">',
        'after_title' => '</h2></div>',
    ));
}

add_action('widgets_init', 'right_widgets_3_init');

function right_widgets_4_init()
{
    register_sidebar(array(
        'name' => '固定ページサイドバー',
        'id' => 'blog_right_page',
        'before_widget' => '<section class="grid-full no-pd sidebar">',
        'after_widget' => '</section>',
        'before_title' => '<div class="content-title-wrapper"><h2 class="content-title">',
        'after_title' => '</h2></div>',
    ));
}

add_action('widgets_init', 'right_widgets_4_init');

function footer_widget_init()
{
    register_sidebar(array(
        'name' => 'フッターウィジェット',
        'id' => 'footer_widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer-widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'footer_widget_init');

add_theme_support( 'custom-header', array(
	'default-image'          => '',
	'random-default'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
) );

add_theme_support('post-thumbnails');
add_theme_support('editor-styles');
add_editor_style('style-editor.css');