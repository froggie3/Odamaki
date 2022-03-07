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
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=8350">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/js/script.js">

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

<!-- 
    Header Navigation Menu
-->

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
        wp_nav_menu( array(
            'menu_class'        => 'navigation-menu-container',
            'menu_id'           => 'headerNav',
            'container'         => 'false',
            'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'theme_location'    => 'header_menu',
			'item_spacing'		=> 'discard',
        ) );
        ?>
    </div>
</header>

<!--
    Header Jambotron 
-->

<div
    class="jumbotron-background"
    style="background-image: url('<?php header_image(); ?>');"
>
    <?php if (is_single()):
    /* 何も出力しない */
    ?>
    <?php else: ?>
        <div class="jumbotron-foreground">
            <h1 class="page-title"><?php    // ヘッダーのタイトル
                if (is_page())
                    echo get_the_title();

                if (is_home())
                    echo get_the_title(114);

                if (is_archive())
                    single_term_title();

                if (is_404())
                    echo "404 Not Found";
                ?>
            </h1>

            <?php if (is_single()):  // 投稿か判定 ?>
            <?php else: ?>
                <div class="page-info"><?php    // ヘッダーの概要欄
                    $d = array(
                        "",
                        "お知らせや身辺のことを綴っています。",
                        "404" => "<p>ページが見つかりませんでした。</p>"
                    );

                    if (is_page())    // 固定ページの処理
                        echo get_the_excerpt();

                    if (is_home())    // ブログページの処理
                        echo $d[1];
                        // なぜかブログ一覧のページだけ要約が表示できない

                    if (is_archive()) {    // その他のページの処理
                        $description = term_description();
                        
                        if (empty($description)) {
                            echo "「" . single_term_title('', false) . "」が含まれる記事を表示しています。";
                        } else {
                            echo term_description();
                        }
                    }

                    if (is_404()) {    // 404の処理
                        echo $d["404"];
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
