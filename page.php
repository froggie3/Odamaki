<?php get_header(); ?>
	<main class="top-content-background">
        <div class="jumbotron-background" style="background-image: url('<?php header_image(); ?>')">
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
		
		<?php
            echo '<section class="content-wrapper-normal content-rules">';
            the_content();
            echo '</section>';
        ?>
	</main>
<?php get_footer();