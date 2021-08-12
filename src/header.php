<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php if (is_front_page()): ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php
endif; ?>
<meta name="theme-color" content="#2d4059">
<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1154">
<!-- Webfont -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&family=Work+Sans&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body id="top">
<div class="wrap">
	<header class="navigation-background">
		<div class="navigation-foreground">
			<div class="navigation-img-link">
				<h1><a title="<?php bloginfo('name'); ?> のトップページへ" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a></h1>
			</div>
<?php
wp_nav_menu( array(
    'menu' => 'header_menu',
    'menu_class' => 'navigation-link-child',
	'menu_id' => '',
    'container' => 'nav',
    'container_class' => 'navigation-link-parent',
) ); ?>
		</div>
	</header>

	<div class="asdf-background" style="background-image: url('<?php header_image(); ?>');">
		<div class="asdf-foreground">
			<h1 class="page-title"><?php
if (is_page())
{
    echo get_the_title();
}
if (is_single())
{
    echo single_post_title();
}
if (is_home())
{
    echo get_the_title(114);
}
if (is_archive())
{
    single_term_title();
}
if (is_404())
{
    echo "404 Not Found";
} ?></h1>

			<div class="page-info"><?php
$d = array(
    "<p>インターネット上にて活動する音屋、“Yokkin”のWebサイトです。</p>",
    "<p>お知らせや身辺のことを綴っています。</p>",
    "404" => "<p>ページが見つかりませんでした。</p>"
);

if (is_front_page())
{
    echo $d[0];
}
if (is_home())
{
    echo $d[1];
}

if (is_archive())
{
	$description = term_description();
	
    if (empty($description)) {
		echo "「" . single_term_title('', false) . "」が含まれる記事を表示しています。";
	} else {
		echo term_description();
	}
}

if (is_404())
{
    echo $d["404"];
} ?>
			<?php if (is_page() && !is_front_page() || is_single()): ?>
			<ul class="page-metadata">
				<li><svg class="meta-icon" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M42 20.25H28.43l5.49-5.64c-5.46-5.41-14.3-5.61-19.76-.2-5.46 5.41-5.46 14.17 0 19.58 5.46 5.41 14.3 5.41 19.76 0 2.72-2.7 4.08-5.83 4.07-9.79H42c0 3.96-1.76 9.1-5.28 12.59-7.02 6.95-18.42 6.95-25.44 0s-7.07-18.22-.05-25.17c7.01-6.95 18.29-6.95 25.3 0L42 6v14.25zM25 16v8.5l7 4.16-1.44 2.42L22 26V16h3z"/></svg><?php if (is_single())
    {
        echo "更新日";
    }
    if (is_page())
    {
        echo "最終更新日";
    } ?>: <?php the_modified_date('Y/m/d'); ?>
			</ul>
			<?php
endif; ?>
			</div>
		</div>
	</div>
