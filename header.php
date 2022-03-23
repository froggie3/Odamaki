<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: https://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#2d4059">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@froggie3_" />
<meta name="twitter:creator" content="@froggie3_" />
<meta property="og:title" content="<?php echo wp_get_document_title(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo get_permalink(); ?>" />
<?php
$image = function() {
    if (is_single() || is_page()):
        if (has_post_thumbnail()) : 
            if (have_posts()) : while ( have_posts() ) :
                return get_the_post_thumbnail_url();
            endwhile; endif;
        else : return get_template_directory_uri() . '/files/img/default.png';
        endif;
    else: return get_template_directory_uri() . '/files/img/default.png';
    endif;
};
echo '<meta property="og:image" content="' . $image() . '" />';
$description = function() {

    global $descriptionMessage;

    if (is_home()): return strip_tags($descriptionMessage['home']['description']);
    elseif (is_single()): return get_the_excerpt();
    else: return strip_tags($descriptionMessage['front']['description']);
    endif;
};
echo '<meta property="og:description" content="' . $description() . '" />';
echo '<meta name="description" content="' . $description() . '" />';
?>

<?php wp_head(); ?>
</head>
<body>
<nav id="topNav" class="top-navigation">
    <div class="top-navigation-foreground container container-full-width align-left">
        <a class="top-navigation-img-link" href="<?php echo esc_url(home_url('/')); ?>">
            <span><?php bloginfo('name'); ?></span>
        </a>
        <?php
        // Header Navigation Menu
        if ( has_nav_menu( 'headerNav' )) :
            wp_nav_menu( array(
                'menu_class'        => 'top-navigation-menu-container',
                'menu_id'           => 'headerNav',
                'container'         => 'false',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'theme_location'    => 'headerNav',
                'item_spacing'		=> 'discard',
            ) );
        endif;
        ?>
</nav>