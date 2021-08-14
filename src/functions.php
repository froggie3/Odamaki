<?php
// メニュー追加

register_nav_menus( array(
	'header_menu' => 'Header Menu',
	'footer_menu' => 'Footer Menu',
	'social_links' => 'Social Links'
) );

// ウィジェット追加

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

// アイキャッチ画像のサポートを有効化
add_theme_support('post-thumbnails');

// ブロックエディタのスタイル指定を有効化
add_theme_support('editor-styles');
add_editor_style('style-editor.css');