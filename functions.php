<?php

use Timber\Timber;
use Timber\Site;
use Timber\Archives;

require_once __DIR__ . '/vendor/autoload.php';

Timber::$dirname = ['templates', 'views'];

Timber::init();

class OdamakiTwigFilter
{
    /**
     * Count the number of characters in HTML markups.
     * @param string string markuped with HTML
     */
    function count_chararacters(string $markup): int
    {
        return mb_strlen(str_replace("\n\n", '', strip_tags($markup)));
    }

    /**
     * Calculate and show the approximate reading time of string. 
     * @param string the length of string 
     */
    function reading_time(int $length): string
    {
        $buf = [];
        foreach ([600, 400] as $i) {
            $buf[] = sprintf('%.0f分', $length / $i);
        }

        return implode('から', $buf);
    }
}

/**
 * Class StarterSite
 */
class StarterSite extends Site
{
    protected OdamakiTwigFilter $filter;

    public function __construct(OdamakiTwigFilter $filter)
    {
        $this->filter = $filter;

        add_action('after_setup_theme', function () {
            $features = [
                'title-tag',
                'responsive-embeds',
                'wp-block-styles',
                'editor-styles',
                'post-thumbnails'
            ];

            foreach ($features as $feature) {
                add_theme_support($feature);
            }

            register_nav_menus([
                'primary_menu' => 'Header',
                'secondary_menu' => 'Footer',
            ]);

            register_sidebars(3, [
                'before_widget'  => '',
                'after_widget'   => '',
            ]);
        });

        add_action('wp_head', function () {
            if (is_attachment() || is_archive()) {
                add_filter('wp_robots', 'wp_robots_sensitive_page');
            }
        });


        add_action('init', [$this, 'register_post_types']);
        add_action('wp_enqueue_scripts', function () {
            $this->register_stylesheets();
            $this->register_scripts();
        });
        add_action('admin_init', [$this, 'register_admin_stylesheets']);

        // get rid of the '...:' in the archive title
        add_filter('get_the_archive_title_prefix', '__return_false');
        add_filter('excerpt_more', '__return_empty_string');

        add_filter('timber/twig', [$this, 'add_to_twig']);
        add_filter('timber/context', [$this, 'add_to_context']);
        parent::__construct();
    }

    /**
     * This is where you can register custom post types.
     */
    public function register_post_types()
    {
        // allows excerpts on pages.
        add_post_type_support('page', 'excerpt');
    }

    public function trigger_redirect()
    {
        if (is_author()) {
            wp_redirect(home_url());
        }

        if (is_attachment() && isset($post)) {
            wp_redirect(get_permalink($post->post_parent), 301);
        }
    }

    /**
     * This is where you can register custom taxonomies.
     */
    public function register_taxonomies()
    {
    }

    /**
     * This is where you can register custom stylesheets.
     */
    public function register_stylesheets()
    {
        $stylesheets = [
            'dashicons' => ['dashicons'],
        ];

        foreach ($stylesheets as $handle => $value) {
            wp_enqueue_style($handle);
            wp_register_style($handle, ...$value);
        }
    }

    public function register_admin_stylesheets()
    {
        add_editor_style('editor-style.css');
    }

    /**
     * This is where you can register custom scripts.
     */
    public function register_scripts()
    {
        $scripts = [
            'odamaki-script' => [
                get_template_directory_uri() . '/dist/bundle.js',
                [],
                wp_get_theme()->Version,
                // [ 'strategy' => 'async', 'in_footer' => false, ]
            ]
        ];

        foreach ($scripts as $handle => $value) {
            wp_enqueue_script($handle);
            wp_register_script($handle, ...$value);
        }
    }

    /**
     * This is where you add some context
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     */
    public function add_to_context($context)
    {
        // Set all nav menus in context.
        foreach (array_keys(get_registered_nav_menus()) as $location) {
            // Bail out if menu has no location.
            if (!has_nav_menu($location)) {
                continue;
            }
            $menu = Timber::get_menu($location);
            $context[$location] = $menu;
        }

        // Set all widgets in context.
        for ($i = 1; $i <= 3; $i++) {
            $context['footer_widgets'][] = Timber::get_widgets($i);
        }

        // $context['archives'] = new Archives();
        $context['site'] = $this;

        return $context;
    }

    public function add_to_twig($twig)
    {
        $twig->addFilter(new Twig\TwigFilter('html_entity_decode', 'html_entity_decode'));
        $twig->addFilter(new Twig\TwigFilter('character_count', [$this->filter, 'count_chararacters']));
        $twig->addFilter(new Twig\TwigFilter('reading_time', [$this->filter, 'reading_time']));

        return $twig;
    }

    /**
     * 現在閲覧しているページのタイトルを表示する。
     */
    function get_title(): string
    {
        $title = '';

        if (is_home() || is_single() || is_archive() || is_search()) {
            $title = get_the_title(get_option('page_for_posts'));
        } elseif (is_page()) {
            $title = get_the_title();
        } elseif (is_404()) {
            $title = 'Page not found';
        }

        return $title;
    }

    /**
     * 現在閲覧しているページのOpen Graph Protocol用のタイトルを表示する。
     */
    function open_graph_title()
    {
        if (is_front_page()) {
            return get_bloginfo('name');
        }
        if (is_home()) {
            return $this->get_title();
        }
        return the_title('', '', false);
    }


    /**
     * 現在閲覧しているページの概要を表示する。
     */
    function get_description(): string
    {
        $descr = '';

        if (is_home() || is_single() || is_archive()) {
            // always get the description of the page 
            $descr = get_the_excerpt(get_option('page_for_posts'));
        } elseif (is_page()) {
            $descr = get_the_excerpt();
        } elseif (is_search()) {
            $descr = get_search_query() . 'の記事を表示しています。';
        } elseif (is_404()) {
            $descr = 'お探しのページは見つかりませんでした。';
        } else {
            $descr = wp_get_document_title();
        }

        return $descr;
    }

    /**
     * 現在閲覧しているページのOpen Graph Protocol用の概要を表示する。
     */
    function meta_description()
    {
        if (is_single() || is_page()) {
            return get_the_excerpt();
        }

        return $this->get_description();
    }
}

new StarterSite(new OdamakiTwigFilter());
