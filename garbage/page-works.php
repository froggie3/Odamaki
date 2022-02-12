<?php get_header(); ?>
<style>
.page-content { max-width: 1140px; }
</style>
	<main class="top-content-background">
		<section class="page-content">
<?php get_template_part( '/template-parts/content/content', 'page' ); ?>
<?php if( is_user_logged_in() == true ) : ?>
<?php get_template_part( '/template-parts/content/content', 'bottom' ); ?>
<?php endif; ?>
		</section>
	</main>
</div>
<?php get_footer();