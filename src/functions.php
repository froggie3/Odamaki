<?php
// テーマ初期化

function custom_theme_setup() {
	// タイトルとかなんやかんや
	add_theme_support( 'title-tag' );

	if (is_front_page()) {
		apply_filters( 'document_title_parts', $tagline );
	}
}

add_action( 'after_setup_theme', 'custom_theme_setup' );


// ナビゲーションメニュー
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'Header Menu', 'ヘッダー部のメニュー' ),
            'footer_menu' => __( 'Footer Menu', 'フッター部のメニュー' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}


// ウィジェット追加

function footer_widget_init() {
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


// カスタムヘッダーのサポート

add_theme_support( 'custom-header', array(
	'default-image'          => get_template_directory_uri() . '/files/img/header-default.jpg',
	'random-default'         => false,
	'width'                  => 1920,
	'height'                 => 200,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '#fff',
	'header-text'            => true,
	'uploads'                => true,
) );

// アイキャッチ画像のサポートを有効化
add_theme_support('post-thumbnails');

// ブロックエディタのスタイル指定を有効化
add_theme_support('editor-styles');
add_editor_style('style-editor.css');

// 固定ページで抜粋を使えるようにする
add_post_type_support('page', 'excerpt');