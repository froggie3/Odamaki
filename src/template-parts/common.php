<?php get_header(); ?>

<?php
if (has_post_thumbnail()):  // アイキャッチ画像 ?>
    <div class="r23jf-wrap">
        <div class="r23jf" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
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

        if (is_single()) {
            if (is_user_logged_in() == true) {
                get_template_part('template-parts/content/bottom');
            }
        }
        ?>
	</section>
</main>
<?php get_footer();