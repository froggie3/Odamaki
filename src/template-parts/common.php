<?php get_header(); ?>

<?php
if (has_post_thumbnail()):  // アイキャッチ画像 ?>
    <div class="jumbotron-featured-image-wrap">
        <div class="jumbotron-featured-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
    </div>
<?php else: ?><!-- アイキャッチ画像がない時の処理  -->
    <!-- なにもしない  -->
<?php endif; ?>

<main class="top-content-background">
	<?php
        if (is_single()) {
            get_template_part('template-parts/content/top');
        }
    ?>
	<section class="page-content">
        <?php
        the_content();

        if (is_single()) { // 普通の投稿
            if (is_user_logged_in() == true) {
                // コンテンツ下のテンプレート(投稿一覧のページネーション) などを表示
                get_template_part('template-parts/content/bottom');
            }
        }
        ?>
	</section>
    
    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
</main>
<?php get_footer();