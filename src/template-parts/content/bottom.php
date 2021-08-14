<!-- コンテンツ下のテンプレート -->
<div class="content-bottom">
	<?php		// 投稿一覧のページネーション
	if (is_archive() || is_home()) {
		the_posts_pagination(
			array (
			'prev_text' => '«',
			'next_text' => '»' 
			)
		);
	}
	?>
</div>