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

    <!--
        CSS and JSes
    -->
    <meta name="theme-color" content="#2d4059">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=<?php echo bin2hex(random_bytes(2)); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/files/js/script.js?ver=<?php echo bin2hex(random_bytes(2)); ?>">

    <!--
        Google Fonts
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto+Mono&family=Work+Sans&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <!--
        OGP
    -->
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
    
<header class="navigation-background">
    <div class="navigation-foreground">
        <div class="navigation-img-link">
            <a
            title="<?php bloginfo('name'); ?> のトップページへ" 
            href="<?php echo esc_url(home_url('/')); ?>"
            >
            <?php esc_url(bloginfo('name')); ?>
            </a>
            <h1><?php esc_url(bloginfo('name')); ?></h1>
        </div>

        <?php
        // Header Navigation Menu
		if (has_nav_menu( 'headerNav' )) {
            
            wp_nav_menu( array(
                'menu_class'        => 'navigation-menu-container',
                'menu_id'           => 'headerNav',
                'container'         => 'false',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'theme_location'    => 'headerNav',
                'item_spacing'		=> 'discard',
            ) );
        }
        ?>
    </div>
</header>