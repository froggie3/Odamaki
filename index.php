<?php

/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */


use Timber\Timber;

$context = Timber::context();
$templates = ['index.twig'];

if (is_front_page()) {
    $context['works'] = Timber::get_posts(new WP_Query(['post_type' => 'work',]));
    $context['profiles'] = Timber::get_posts(new WP_Query(['post_type' => 'profile', 'order' => 'DESC']));
    array_unshift($templates, 'front-page.twig');
} elseif (is_tag() || is_category()) {
    array_unshift($templates, 'term.twig');
} elseif (is_search()) {
    $context['search_query'] = get_search_query();
    array_unshift($templates, 'search.twig');
} elseif (is_archive()) {
    // Get a term when on a term archive page
    $context['archive_title'] = get_the_archive_title();
    array_unshift($templates, 'archive.twig');
} elseif (is_single()) {
    $post = $context['post'];
    $context['related_posts'] = Timber::get_posts([
        'post_type' => 'post',
        'posts_per_page' => 4,
        'no_found_rows' => true,
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => [$post->ID],
        'category__in' => $post->terms([
            'taxonomy' => 'category',
            'fields' => 'ids',
        ]),
    ]);
    array_unshift($templates, 'single.twig');
} elseif (is_singular()) {
    array_unshift($templates, 'singular.twig');
} elseif (is_404()) {
    $context['search'] = get_search_form(['echo' => false]);
    array_unshift($templates, '404.twig');
    // array_unshift($templates, 'single.twig');
}

Timber::render($templates, $context);
// var_export($context);
