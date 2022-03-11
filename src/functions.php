<?php
// テーマ初期化

function custom_theme_setup() {
	// タイトルとかなんやかんや
	add_theme_support( 'title-tag' );

	// if (is_front_page()) {
	//	apply_filters( 'document_title_parts', $tagline );
	//  }
}

add_action( 'after_setup_theme', 'custom_theme_setup' );


// ナビゲーションメニュー
register_nav_menus(array(
    'headerNav' => 'on Header',
    'footerNav' => 'on Footer',
) );

// 検索機能を無効化するコードを誰かが書いてくれるらしい

/*
    function disableSearch(){
    }
*/

// ウィジェット追加

function footer_widget_init() {
    register_sidebar(array(
        'name' => 'フッターウィジェット',
        'id' => 'footer_widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
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
add_theme_support( 'post-thumbnails' );


/*
/* Gutenberg related
*/

add_theme_support( 'wp-block-styles' );		// デフォルトのブロックスタイル


// 固定ページで抜粋を使えるようにする
add_post_type_support( 'page', 'excerpt' );


function mytheme_setup_theme_supported_features() {		// ブロックフォントサイズ
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => esc_attr__( 'dark blue', 'themeLangDomain' ),
            'slug'  => 'dark-blue',
            'color' => '#2d4059',
        ),
        array(
            'name'  => esc_attr__( 'dark red', 'themeLangDomain' ),
            'slug'  => 'dark-red',
            'color' => '#bb2a2a',
        ),
        array(
            'name'  => esc_attr__( 'black', 'themeLangDomain' ),
            'slug'  => 'black',
            'color' => '#333',
        ),
        array(
            'name'  => esc_attr__( 'white', 'themeLangDomain' ),
            'slug'  => 'white',
            'color' => '#f3f3f3',
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

add_theme_support( 'disable-custom-colors' );		// ブロックカラーパレットでのカスタム色の無効化
add_theme_support( 'disable-custom-gradients' );	// カスタムグラデーションの無効化

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );	// フォントサイズ
add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => __( 'Regular', 'themeLangDomain' ),
        'size' => 16,
        'slug' => 'regular'
    ),
) );

add_theme_support('disable-custom-font-sizes');		// カスタムフォントサイズの無効化
add_theme_support( 'custom-units', array() );		// カスタムユニットのサポート
remove_theme_support( 'core-block-patterns' );		// デフォルトのブロックパターンの無効化

add_theme_support( 'editor-styles' );	// エディタースタイル
add_editor_style( 'style-editor.css' );	// エディタースタイルのエンキュー
add_theme_support( 'responsive-embeds' );	// 埋め込みコンテンツのレスポンシブ化
