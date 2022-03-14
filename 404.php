<?php get_header(); ?>
	<main class="container container-big">
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
			echo '
			<div class="front-content-container">
				<h2 class="content-title margin-top">Sorry!</h2>
				<section class="large-section-wrapper item-border content-rules">
						<p>指定したファイル、もしくはファイルはこのサーバーには存在しません。<br>
						もし、たった今参照しようとしたページが過去に存在していたページである場合、そのページは削除された可能性があります。</p>
						<p>The document you\'ve just reffered was currently not in this server.
						If this URL was surely what you\'ve known for, it could be deleted.</p>
						<p><a href="' . esc_url( home_url( '/' )) . '">トップページへもどる</a></p> 
				</section>
			</div>
			';
		?>
	</main>
<?php get_footer();