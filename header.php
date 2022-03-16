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
<meta name="theme-color" content="#2d4059">
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
<nav class="top-navigation">
    <div class="top-navigation-foreground container container-big">
        <a class="top-navigation-img-link" href="<?php echo esc_url(home_url('/')); ?>">
            <span><?php bloginfo('name'); ?></span>
        </a>
        <?php
        // Header Navigation Menu
        if (has_nav_menu( 'headerNav' )) {
            wp_nav_menu( array(
                'menu_class'        => 'top-navigation-menu-container',
                'menu_id'           => 'headerNav',
                'container'         => 'false',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'theme_location'    => 'headerNav',
                'item_spacing'		=> 'discard',
            ) );
        }
        ?>
    <div class="container-big">
</nav>