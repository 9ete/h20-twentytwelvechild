<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo" class="footer colophon">
		<div class="page-middle">
			<div id='footer-left' class='footer-left'>
				<img src='/wp-content/themes/h20-twentytwelvechild/h20-dry-iphone-waterproof-case.png' />
			</div>
			<div id='footer-right' class='footer-right'>
				<nav id="footer-navigation" class="footer-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
	
			<div class="site-info">
				<p>Copyright © <?php echo date('Y'); ?>, H2Odry.com, All Rights Reserved</p>
			
				<?php //do_action( 'twentytwelve_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://lowermedia.net/', 'lowermedia' ) ); ?>" title="<?php esc_attr_e( 'Primo Web Applications', 'lowermedia' ); ?>">
					<?php printf( __( 'Website Designed and Developed by Kelsey Huebner in Association with %s', 'lowermedia' ), 'LowerMedia' ); ?>
				</a>
			</div><!-- .site-info -->
		</div><!-- .page-middle -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
