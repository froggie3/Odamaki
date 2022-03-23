<?php get_header(); ?>
<div class="jumbotron" style="background-image: url('<?php header_image(); ?>')">
	<div class="jumbotron-background container container-big align-center">
		<?php showPageInfo(); ?>
	</div>
</div>
<main id="breakPointForNav" class="container container-big separator">
	<?php
	if (have_posts()) {		// ループ開始
		global $wp_query;
		echo '<h2 class="content-title margin-top">' . $wp_query->found_posts . '&nbsp;entry(ies) found</h2>';

		echo '<div class="entries grid-test grid-1rem-gap">';
		while (have_posts()) :
			?> 
			<?php the_post(); ?>

			<a class="entry-content" href="<?php the_permalink(); ?>">
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
							<span><?php the_modified_date('Y/m/d'); ?></span>
						</li>
					</ul>
					<div class="post-title-wrapper">
						<?php the_title('<h3 class="post-excerpt-title">', '</h3>'); ?>
					</div>
				</div>
			</a>
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