<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bootstrap Blog
 */

?>
	<footer class="main">
		<div class="container">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
	</footer>
		<div class="copyright text-center">
			<?php esc_html_e( "Powered by", 'bootstrap-blog' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>"><?php esc_html_e( "WordPress", 'bootstrap-blog' ); ?></a> | <?php esc_html_e( 'Theme by', 'bootstrap-blog' ); ?> <a href="<?php echo esc_url( 'http://thebootstrapthemes.com/' ); ?>"><?php esc_html_e( 'TheBootstrapThemes','bootstrap-blog' ); ?></a>
		</div>
		<div class="scroll-top-wrapper"> <span class="scroll-top-inner"><i class="fa fa-2x fa-angle-up"></i></span></div> 
		
		<?php wp_footer(); ?>
	</body>
</html>