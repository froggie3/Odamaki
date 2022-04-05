<?php
if (!function_exists( 'odamaki_setup' )):
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since Odamaki 1.0
*/
function odamaki_setup() {
    add_action( 'wp_enqueue_scripts', function(){
        if ( ! is_admin() ) :
            wp_enqueue_style( 'ress', get_template_directory_uri() . '/files/css/ress.min.css', false, false, 'all' );
            wp_enqueue_style( 'style', get_template_directory_uri() . '/style.min.css', false, false, 'all' );
            wp_enqueue_script( 'script', get_template_directory_uri() . '/files/js/script.js' , array(), false, true);
            wp_enqueue_script( 'smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js' , array(), false, true);
            wp_add_inline_script( 'init-smooth-scroll', 'var scroll = new SmoothScroll(\"a[href*="#"]\");', 'after' );
        endif;
        wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&display=swap', array(), null );
        wp_enqueue_style( 'yakuhanjp', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css', array(), null );
    });
    add_action( 'admin_enqueue_scripts', function(){
        wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&display=swap', array(), null );
        wp_enqueue_style( 'yakuhanjp', 'https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css', array(), null );
    });
    register_nav_menus( array( 'headerNav' => 'on Header', 'footerNav' => 'on Footer', ) );     // ナビゲーションメニューを登録
    add_action( 'widgets_init', function() {
            register_sidebar (
                array(
                'name'              => 'フッターウィジェット',
                'id'                => 'footer_widget',
                'description'       => 'フッターに表示されるウィジェットです。',
                'before_widget'     => '<li id="%1$s" class="widget %2$s">',
                'after_widget'      => '</li>',
                'before_title'      => '<h2 class="widgettitle">',
                'after_title'       => '</h2>',
            ));
        }
    );       // ウィジェットを追加   
    add_theme_support( 'title-tag' );   // title タグを wp_head() 内に出力
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    
    add_action( 'wp_head', function() {
        echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/files/img/favicon/favicon.ico' />" . "\n";
        
    });
    add_theme_support( 'post-thumbnails' );     // アイキャッチ画像のサポートを有効化

    add_action( 'template_redirect', function() {
        if (is_author()) :
            wp_redirect(home_url());
            exit();
        endif;
    });

    /* Gutenberg related */

    add_theme_support( 'wp-block-styles' );		// デフォルトのブロックスタイル
    add_theme_support( 'align-wide' );		// 幅広の配置
    add_post_type_support( 'page', 'excerpt' );     // 固定ページで抜粋を使えるようにする
    remove_theme_support( 'core-block-patterns' );		// デフォルトのブロックパターンの無効化
    add_theme_support( 'editor-styles' );	// エディタースタイル
    add_editor_style( 'style-editor.min.css' );	// エディタースタイルのエンキュー
    add_theme_support( 'responsive-embeds' );	// 埋め込みコンテンツのレスポンシブ化
    remove_filter( 'comment_text', 'make_clickable', 9);
    add_filter( 'pre_comment_content', 'wp_specialchars' );
    add_filter( 'comment_text', 'wp_filter_nohtml_kses' );
    add_filter( 'comment_text_rss', 'wp_filter_nohtml_kses' );
    add_filter( 'comment_excerpt', 'wp_filter_nohtml_kses' );
    add_filter( 'allowed_block_types_all', function() {
        return array(
            // テキスト
            'core/paragraph',    // 段落
            'core/heading',      // 見出し
            'core/list',         // リスト
            'core/quote',        // 引用
            'core/preformatted', // 整形済み
            'core/table',        // テーブル

            // メディア
            'core/image',      // 画像
            'core/audio',      // 音声

            // ウィジェット
            'core/shortcode',       // ショートコード
            'core/archives',        // アーカイブ
            'core/categories',      // カテゴリー
            'core/latest-comments', // 最新のコメント
            'core/latest-posts',    // 最新の投稿
            'core/page-list',       // 固定ページリスト

            // 埋め込み
            'core/embed',
        );
    });

    remove_action( 'wp_head', 'wp_resource_hints', 2, 99 ); 
    remove_action( 'wp_head', 'rest_output_link_wp_head' );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_head', 'feed_links' );
    remove_action( 'wp_head', 'feed_links_extra' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );

    if ( ! function_exists( 'better_comments' ) ) :
        function better_comments($comment, $args, $depth) {
            ?>
           <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            <div class="comment">
                <div class="" style="display: flex;">
                    <div class="" style="display: inline-block; border-radius: 999px;">
                        <?php echo get_avatar ( $comment, $size = '64', $default = 'http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
                    </div>

                    <div class="comment-by" style="display: inline-block;  margin-left: 1em; padding-top: 0.5rem; ">
                        <div>
                            <div class="comment-name" style="display: inline-block; font-weight: bold;">
                                <?php echo get_comment_author() ?>
                            </div>
                            <div class="comment-date" style="display: inline-block; margin-left: .5em; font-size: .7em;">
                                <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?>
                            </div>
                        </div>
                        
                        <div class="comment-by">
                            <?php comment_reply_link( array_merge ( $args, array( 'depth' => $depth, 'max_depth' => $args[ 'max_depth' ] ) ) ) ?>
                        </div>

                        
                        <div class="comment-block">
                            <div class="comment-arrow"></div>
                                <?php if ($comment->comment_approved == '0') : ?>
                                    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                                    <br />
                                <?php endif; ?>
                            <p> <?php comment_text() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
    endif;

    add_action( 'pre_get_posts', function ($query) {
        if ( is_singular() || is_admin() ) : return;
        endif;
        $query->set('has_password', false);
    });
}
endif;  // odamaki_setup
add_action( 'after_setup_theme', 'odamaki_setup' );


$descriptionMessage = [
    'front' => [
        'title' => '<span class=\'word-wrap-block\'>Welcome</span> <span class=\'word-wrap-block\'>to</span> <span class=\'word-wrap-block\'>yokkin.com!</span>',
        'description' => '<span class=\'word-wrap-block\'>インターネット上にて</span><span class=\'word-wrap-block\'>活動する音屋、</span><span class=\'word-wrap-block\'>YokkinのWebサイトです。</span>',
    ],
    'home' => [
        'title' => 'Knowledge Base',
        'description' => 'お知らせや身辺のことを綴っています。',
    ],
    '404' => [
        'title' => '404 Not Found',
        'description' => 'ページが見つかりませんでした。',
    ],
];

function showPageInfo() {
    global $descriptionMessage;
    
    if (is_page()):
        if (is_front_page()): 
            $title = $descriptionMessage['front']['title'];
            $descr = $descriptionMessage['front']['description'];
            echo '<h1 class="jumbotron-page-title big text-shadow">' . $title . '</h1>';
            echo '<div class="jumbotron-page-info big text-shadow">' . $descr . '</div>';
        else:
            $title = get_the_title();
            echo '<h1 class="jumbotron-page-title">' . $title . '</h1>';
            if (has_excerpt()):
                $descr = get_the_excerpt();
                echo '<div class="jumbotron-page-info">' . $descr . '</div>';
            endif;
        endif;
    endif;
    if (is_home() || is_single()):
        $title = $descriptionMessage['home']['title'];
        $descr = $descriptionMessage['home']['description'];
        echo '<h1 class="jumbotron-page-title">' . $title . '</h1>';
        echo '<div class="jumbotron-page-info">' . $descr . '</div>';
    endif;
    if (is_archive()):
        $title = single_term_title('', false);

        if (empty(term_description())):
            $descr = '「' . single_term_title( '', false) . '」が含まれる記事を表示しています。';
        else:
            $descr = term_description();
        endif;
        echo '<h1 class="jumbotron-page-title">' . $title . '</h1>';
        echo '<div class="jumbotron-page-info">' . $descr . '</div>';
    endif;
    if (is_404()):
        $title = $descriptionMessage['404']['title'];
        $descr = $descriptionMessage['404']['description'];
        echo '<h1 class="jumbotron-page-title">' . $title . '</h1>';
        echo '<div class="jumbotron-page-info">' . $descr . '</div>';
    endif;   
}

// 検索機能を無効化するコードを誰かが書いてくれるらしい
// function disableSearch() {}
