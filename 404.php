<?php get_header(); ?>
<div class="jumbotron" style="background-image: url('<?php header_image(); ?>')">
	<div class="jumbotron-background container container-big align-center">
		<?php showPageInfo(); ?>
	</div>
</div>
<main id="breakPointForNav" class="container container-big separator">
	<?php
		echo '
		<section class="front-content-container">
			<h2 class="content-title margin-top">Sorry!</h2>
			<div class="large-section-wrapper item-border content-rules">
					<p>指定したファイル、もしくはファイルはこのサーバーには存在しません。<br>
					もし、たった今参照しようとしたページが過去に存在していたページである場合、そのページは削除された可能性があります。</p>
					<p>The document you\'ve just reffered was currently not in this server.
					If this URL was surely what you\'ve known for, it could be deleted.</p>
					<p><a href="' . esc_url( home_url( '/' )) . '">トップページへもどる</a></p> 
			</div>
		</section>
		';
	?>
</main>
<?php get_footer();