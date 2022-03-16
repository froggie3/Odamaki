<?php get_header(); ?>
<div class="jumbotron" style="background-image: url('<?php header_image(); ?>')">
		<div class="jumbotron-background container container-big">
			<?php if (!empty(headerTitle())): ?>
				<?php echo '<h1 class="jumbotron-page-title">' . headerTitle() . '</h1>'; ?>
			<?php endif; ?>

			<?php if (is_single()):  // 投稿ページの詳細は不要なので何も出力しない ?>
			<?php else: ?>
				<?php
				if (!empty(headerDescription())) {
					echo '<div class="jumbotron-page-info">' . headerDescription() . '</div>';
				}
				?>
			<?php endif; ?>
		</div>
	</div>
	<div class="top-content-background container">
		
		<?php
            echo '<section class="content-wrapper-normal content-rules">';
            the_content();
            echo '</section>';
        ?>
	</div>
<?php get_footer();