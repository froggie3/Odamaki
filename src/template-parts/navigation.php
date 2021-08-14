<header class="navigation-background">
    <div class="navigation-foreground">
        <div class="navigation-img-link"> <!-- よっきんロゴ -->
            <h1>
                <a
                title="<?php bloginfo('name'); ?> のトップページへ" 
                href="<?php echo esc_url(home_url('/')); ?>"
                >
                <?php esc_url(bloginfo('name')); ?>
                </a>
            </h1>
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