<footer class="footer-background">
	<div class="footer-foreground">
		<div class="footer-above">
			<div class="footer-widget-container"><?php
				if ( is_active_sidebar( 'footer_widget' ) ) {
					dynamic_sidebar( 'footer_widget' );
				} ?>
			</div>
		</div>
		<div class="footer-below">
			<div class="copyright">
				<small class="copyright-name">&copy; Yokkin</small>
			</div>
			<?php
			wp_nav_menu( array(
				'menu'                 => '',
				'menu_class'           => '',
				'menu_id'              => '',
				'container'            => 'nav',
				'container_class'      => 'footer-menu-container',
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
				'theme_location'       => 'footer_menu',
			) );
			?>
		</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
