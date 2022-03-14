<footer class="footer-background">
	<div class="footer-widget-container"><?php
		if ( is_active_sidebar( 'footer_widget' ) ) {
			dynamic_sidebar( 'footer_widget' );
		} ?>

		<div class="footer-item copyright">
			<small class="copyright-name">&copy; Yokkin</small>
		</div>
		
		<?php
		if (has_nav_menu( 'footerNav' )) {
			wp_nav_menu( array(
				'menu_class'        => 'footer-item footer-menu-container',
				'menu_id'           => 'footerNav',
				'container'			=> 'false',
				'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'theme_location'	=> 'footerNav',
				'item_spacing'		=> 'discard',
			) );
		}
		?>
	</div>
</footer>
<div class="jump-to-top-container">
	<a href="#top" class="jump-to-top">
		<div class="arrow-wrapper" title="ページの最上部へ戻る">
			<svg class="arrow" width="24" height="24" version="1.1" viewBox="0 0 6.35 6.35" xmlns="http://www.w3.org/2000/svg"><path d="m3.175 2.7781 0.79375-0.79375 2.3812 2.3813-0.79375 0.79375zm-3.175 1.5875 3.175-3.175 0.79375 0.79375-3.175 3.175z"/></svg>
		</div>
	</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
