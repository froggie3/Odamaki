<?php get_header(); ?>
	<main class="top-content-background">
		<?php if (have_posts()): ?>
		<div class="entry-content-container"><?php
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content/content');
			} ?>
		</div>
				
		<?php get_template_part('template-parts/content/bottom'); ?>
		
		<?php else: ?>
		<p>ここにはなにもないよ</p>
		<?php endif; ?>
	</main>
</div>

<?php get_footer();