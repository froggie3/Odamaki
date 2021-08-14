<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php if (is_front_page()): ?>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php endif; ?>
	<meta name="theme-color" content="#2d4059">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1156">
	<!-- Webfont -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&family=Work+Sans&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body id="top">
<div class="wrap">

<?php get_template_part('template-parts/navigation'); ?> <!-- ナビゲーションメニュー -->
<?php get_template_part('template-parts/variable-header'); ?> <!-- ヘッダ -->
