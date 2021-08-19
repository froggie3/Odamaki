<header class="navigation-background">
    <div class="navigation-foreground">
        <div class="navigation-img-link"> <!-- よっきんロゴ -->
            <a
            title="<?php bloginfo('name'); ?> のトップページへ" 
            href="<?php echo esc_url(home_url('/')); ?>"
            >
            <?php esc_url(bloginfo('name')); ?>
            </a>
            <h1><?php esc_url(bloginfo('name')); ?></h1>
        </div>

        <?php
        wp_nav_menu( array(
            'menu'                 => '',
            'menu_class'           => '',
            'menu_id'              => '',
            'container'            => 'nav',
            'container_class'      => 'navigation-menu-container',
            'container_id'         => '',
            'container_aria_label' => '',
            'echo'                 => true,
            'fallback_cb'          => 'wp_page_menu',
            'before'               => '',
            'after'                => '',
            'link_before'          => '',
            'link_after'           => '',
            'items_wrap'           => '<ul>%3$s</ul>',
            'item_spacing'         => 'preserve',
            'depth'                => 0,
            'walker'               => '',
            'theme_location'       => 'header_menu',
        ) );
        ?>
    </div>
</header>