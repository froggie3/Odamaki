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
		if (have_posts()) {		// ループ開始
			global $wp_query;
			echo '<h2 class="content-title margin-top">' . $wp_query->found_posts . '&nbsp;entry(ies) found</h2>';

			echo '<div class="grid-test grid-1rem-gap">';
			while (have_posts()) :
				?> 
				<?php the_post(); ?>

				<div class="entry-content-wrap">
					<a href="<?php the_permalink(); ?>" class="entry-content">
						<div class="post-thumbnail-wrapper">
							<?php
							$categories = get_the_category();
							// アイキャッチ画像の上にカテゴリー名を表示
							if (!empty( $categories ) ) { 
								echo '<div class="post-thumbnail-overlap"><span>' . esc_html( $categories[0]->name ) . '</span></div>';
							}
							
							// アイキャッチ画像の処理
							if (has_post_thumbnail()) { 
								the_post_thumbnail( 'full', array( 'class' => 'post-thumbnail' ) );
							}
							else {
								echo '<img class="post-thumbnail" alt="「' . the_title('', '', false) . '」のサムネイル画像" src="' . get_template_directory_uri() . '/files/img/empty-thumbnail.png" width="1200" height="630" />';
							}
							?>
						</div>
						<div class="post-description">
							<ul class="entry-content-metadata-wrapper">
								<li class="entry-content-metadata"><!-- 投稿日時  -->
									<svg class="meta-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" > <path d="M42 20.25H28.43l5.49-5.64c-5.46-5.41-14.3-5.61-19.76-.2-5.46 5.41-5.46 14.17 0 19.58 5.46 5.41 14.3 5.41 19.76 0 2.72-2.7 4.08-5.83 4.07-9.79H42c0 3.96-1.76 9.1-5.28 12.59-7.02 6.95-18.42 6.95-25.44 0s-7.07-18.22-.05-25.17c7.01-6.95 18.29-6.95 25.3 0L42 6v14.25zM25 16v8.5l7 4.16-1.44 2.42L22 26V16h3z"/></svg>
									<span><?php the_modified_date('Y/m/d'); ?></span>
								</li>
							</ul>
							<div class="post-title-wrapper">
								<?php the_title('<h3 class="post-excerpt-title">', '</h3>'); ?>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile;
			echo '</div>';		// ループ終了
			
			// 投稿一覧のページネーションを表示
			echo '<div class="content-bottom">' . the_posts_pagination( array ( 'prev_text' => '«', 'next_text' => '»', ) ) . '</div>';
		}
		
		else {
			echo '
			<div class="front-content-container">
				<h2 class="content-title">No posts found</h2>
				<section class="large-section-wrapper item-border content-rules">
						<p>現在、このウェブサイトに記事が一つも投稿されていない可能性が考えられます。
						もしあなたが管理者であれば、1つでも記事を投稿するとこの表示は消えます。</p>
						<p>Have you ever posted any articles in this website? 
						If you are an administrator, note that this notify can be disabled when you make a single article.</p>
				</section>
			</div>
			';
		}
		?>
	</main>
<?php get_footer();