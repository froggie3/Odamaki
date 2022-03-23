<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="jumbotron" style="background-image: url('<?php header_image(); ?>')">
	<div class="jumbotron-background container container-big align-center">
		<?php showPageInfo(); ?>
	</div>
</div>
<main id="breakPointForNav" class="container content-wrapper-normal separator">
    <?php echo '<section class="content-wrapper-normal content-rules">';?>
	<div class="content-above">
		<?php
		$post_thumbnail = function() {
			if ( has_post_thumbnail() ) : return get_the_post_thumbnail();
			else : return '<img alt="'. get_the_title(). '" src="'. get_template_directory_uri() . '/files/img/empty-thumbnail.png" />';
			endif;
		};
		echo $post_thumbnail();
		?>
	</div>
    <?php the_content();?>
    <?php echo '</section>';?>
    <?php
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
    ?>
    <?php endwhile; endif; ?>
</main>
<?php get_footer();