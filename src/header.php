<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if (is_front_page()): ?>
<meta name="description" content="<?php bloginfo('description'); ?>">

<?php elseif (is_single()): ?>
<meta name="description" content="<?php echo get_the_excerpt(); ?>">
<?php endif; ?>

<!-- Stylesheets -->
<meta name="theme-color" content="#2d4059">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=1167">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&family=Work+Sans&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
<?php wp_head(); ?>

<!-- OGP -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@froggie3_" />
<meta name="twitter:creator" content="@froggie3_" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
<?php if (is_front_page()): ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php elseif (is_single()): ?>
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>" />
<?php endif; ?>
<?php if (has_post_thumbnail()) : ?>
<meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
<?php else: ?>
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/files/img/default.png" />
<?php endif; ?>
</head>

<body>

<?php get_template_part('template-parts/navigation'); ?> <!-- ナビゲーションメニュー -->
<?php get_template_part('template-parts/variable-header'); ?> <!-- ヘッダ -->
