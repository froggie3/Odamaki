<div
    class="asdf-background"
    style="background-image: url('<?php header_image(); ?>');"
>
    <div class="asdf-foreground">
        <h1 class="page-title"><?php    // ヘッダーのタイトル
            if (is_page())
                echo get_the_title();

            if (is_single())
                echo single_post_title();

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
</div>