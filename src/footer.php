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
			<div class="copyright copyright-item">
				<small class="copyright-name">&copy; Yokkin</small>
			</div>
			<?php
			wp_nav_menu( array(
				'menu' => 'footer_menu',
				'menu_class' => 'footer-menu copyright-item',
				'menu_id' => '',
				'container'       => '',
				'container_class' => '',
			)); ?>
		</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
