<?php get_header(); ?>
<main class="top-content-background">
	<?php
        if (is_single()) {
            get_template_part('template-parts/content/top');
        }
    ?>
	<section class="page-content">
        <?php
        the_content();

        if (is_single()) {
            if (is_user_logged_in() == true) {
                get_template_part('template-parts/content/bottom');
            }
        }
        ?>
	</section>
</main>
<?php get_footer();