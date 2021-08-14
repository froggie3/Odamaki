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
                echo "404 Not Found"; ?>
        </h1>

        <div class="page-info"><?php    // ヘッダーの概要欄
            $d = array(
                "<p>インターネット上にて活動する音屋、“Yokkin”のWebサイトです。</p>",
                "<p>お知らせや身辺のことを綴っています。</p>",
                "404" => "<p>ページが見つかりませんでした。</p>"
            );

            if (is_front_page())    // トップページの処理
                echo $d[0];

            if (is_home())    // ブログページの処理
                echo $d[1];

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
            } ?>

            <?php if (is_front_page()): // フロントページか判定 ?>

            <?php elseif (is_home()):  // ブログのトップページか判定 ?>

            <?php else: ?>
                <ul class="page-metadata">
                    <li>
                        <svg
                        class="meta-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                        viewBox="0 0 48 48"
                        >
                        <path d="M42 20.25H28.43l5.49-5.64c-5.46-5.41-14.3-5.61-19.76-.2-5.46 5.41-5.46 14.17 0 19.58 5.46 5.41 14.3 5.41 19.76 0 2.72-2.7 4.08-5.83 4.07-9.79H42c0 3.96-1.76 9.1-5.28 12.59-7.02 6.95-18.42 6.95-25.44 0s-7.07-18.22-.05-25.17c7.01-6.95 18.29-6.95 25.3 0L42 6v14.25zM25 16v8.5l7 4.16-1.44 2.42L22 26V16h3z"/>
                        </svg><?php
                        if (is_single())
                            echo "更新日";

                        if (is_page())
                            echo "最終更新日"; ?>:
                        <?php the_modified_date('Y/m/d'); ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>