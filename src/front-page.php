<?php get_header(); ?>
<main class="top-content-background">
	<div class="front-content-container">
		<div class="front-content">
			<?php get_template_part('template-parts/content/front'); ?>
			<?php // get_template_part('template-parts/content/front-commition'); ?>
		</div>
	</div>
	<?php get_template_part('template-parts/content/bottom'); ?>
</main>

<?php get_footer();
