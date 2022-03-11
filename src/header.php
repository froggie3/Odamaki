<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if (is_front_page()): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php elseif (is_single()): ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>

    <!--
        CSS and JSes
    -->
    <meta name="theme-color" content="#2d4059">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=<?php echo bin2hex(random_bytes(2)); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/js/script.js?ver=<?php echo bin2hex(random_bytes(2)); ?>">

    <!--
        Google Fonts
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&family=Work+Sans&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <!--
        OGP
    -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@froggie3_" />
    <meta name="twitter:creator" content="@froggie3_" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
    <?php if (is_front_page()): ?>
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <?php elseif (is_single()): ?>
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
    <?php endif; ?>
    <?php if (has_post_thumbnail()) : ?>
    <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    <?php else: ?>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/files/img/default.png" />
    <?php endif; ?>
</head>

<body>
    
<header class="navigation-background">
    <div class="navigation-foreground">
        <div class="navigation-img-link">
            <a
            title="<?php bloginfo('name'); ?> のトップページへ" 
            href="<?php echo esc_url(home_url('/')); ?>"
            >
            <?php esc_url(bloginfo('name')); ?>
            </a>
            <h1><?php esc_url(bloginfo('name')); ?></h1>
        </div>

        <?php
        // Header Navigation Menu
		if (has_nav_menu( 'headerNav' )) {
            
            wp_nav_menu( array(
                'menu_class'        => 'navigation-menu-container',
                'menu_id'           => 'headerNav',
                'container'         => 'false',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'theme_location'    => 'headerNav',
                'item_spacing'		=> 'discard',
            ) );
        }
        ?>
    </div>
</header>

<!--
    Header Jambotron 
-->

<?php

// ヘッダーのタイトル
function headerTitle(): string {
    if (is_page()) { 
        return get_the_title();
    }
    if (is_home()) {
        if (empty(get_the_title(114))) {
            return "Knowledge Base";
        } else {
            return get_the_title(114);
        }
    }
    if (is_archive()) {
        return single_term_title();
    }
    if (is_404()) {
        return "404 Not Found";
    }
}

// ヘッダーの概要欄
function headerDescription(): string {
    $descriptionMessage = array(
        'aaaaa',
        'お知らせや身辺のことを綴っています。',
        '404' => '<p>ページが見つかりませんでした。</p>'
    );
    
    if (is_page()) {     // 固定ページの処理
        return get_the_excerpt();

    } elseif (is_home()) {     // ブログページの処理
        return $descriptionMessage[1];
        // なぜかブログ一覧のページだけ要約が表示できない

    } elseif (is_archive()) {    // その他のページの処理
        if (empty(term_description())) {
            return '「' . single_term_title('', false) . '」が含まれる記事を表示しています。';

        } else {
            return term_description();
        }

    } elseif (is_404()) {    // 404の処理
        return $descriptionMessage['404'];
        
    } elseif (is_front_page()) {
        return $descriptionMessage[0];
    }
}
?>

<!--
    Template for non-Single Posts
-->
<?php if (!is_single()): ?>
    <div class="jumbotron-background" style="background-image: url('<?php header_image(); ?>');">
        <?php if (!empty(headerTitle())): ?>
            <?php echo '<h1 class="page-title">' . headerTitle() . '</h1>'; ?>
        <?php endif; ?>

        <?php if (is_single()):  // 投稿ページの詳細は不要なので何も出力しない ?>
        <?php else: ?>
            <?php
            if (!empty(headerDescription())) {
                echo '<div class="page-info">' . headerDescription() . '</div>';
            }
            ?>
        <?php endif; ?>
    </div>

<!--
    Template for Single Posts
-->
    <?php else: ?>
        <?php if (has_post_thumbnail()): ?>
            <div class="jumbotron-featured-image-wrap">
                <div class="jumbotron-featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
            </div>
        <?php else: ?><!-- アイキャッチ画像がない時の処理  -->
            <!-- なにもしない  -->
        <?php endif; ?>
<?php endif; ?>