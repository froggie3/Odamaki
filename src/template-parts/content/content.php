<div id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>" class="entry-content">
		<div class="post-thumbnail-wrapper"><!-- カテゴリー名オーバーレイ  -->
			<div class="post-thumbnail-overlap">
				<span>
					<?php
						$category = get_the_category(); 
						$cat_name = $category[0]->cat_name;
						echo $cat_name;
					?>
				</span>
			</div>
			<?php if (has_post_thumbnail()): // アイキャッチ画像
				the_post_thumbnail(
					'thumbnail',
					array(
						'class' => 'post-thumbnail'
						)
				);
			?>
			<?php else: ?><!-- アイキャッチ画像がない時の処理  -->
				<img class="post-thumbnail" src="https://yokkin.com/wp-content/uploads/2021/02/noimg.png" width="100" height="100" />
			<?php endif; ?>
		</div>
		<div class="post-description">
			<div class="post-title-wrapper">
				<h3 class="post-excerpt-title">
					<?php the_title(); ?>
				</h3>
			</div>
			<ul class="entry-content-metadata-wrapper">
				<li class="entry-content-metadata"><!-- 投稿日時  -->
					<svg class="meta-icon"
						xmlns="http://www.w3.org/2000/svg"
						width="48"
						height="48"
						viewBox="0 0 48 48"
					>
						<path d="M42 20.25H28.43l5.49-5.64c-5.46-5.41-14.3-5.61-19.76-.2-5.46 5.41-5.46 14.17 0 19.58 5.46 5.41 14.3 5.41 19.76 0 2.72-2.7 4.08-5.83 4.07-9.79H42c0 3.96-1.76 9.1-5.28 12.59-7.02 6.95-18.42 6.95-25.44 0s-7.07-18.22-.05-25.17c7.01-6.95 18.29-6.95 25.3 0L42 6v14.25zM25 16v8.5l7 4.16-1.44 2.42L22 26V16h3z"/>
					</svg>
					<span>
						<?php the_modified_date('Y/m/d'); ?>
					</span>
				</li>
			</ul>
		</div>
	</a>
</div>
