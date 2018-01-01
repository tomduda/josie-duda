<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package joshua
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'joshua_credits' ); ?>
			<?php
			printf(
				/* translators: %s = text link: WordPress, URL: http://wordpress.org/ */
				__( 'Designed by %s', 'ThomasDuda' ),
				'<a href="http://thomasduda.com/" rel="generator">' . esc_attr__( 'ThomasDuda', 'Francis' ) . '</a>'
				); ?>
			<span class="sep"> | </span>
			<?php
			printf(
				/* translators: %1$s = text link: joshua, URL: http://thomasduda.com/, %2$s = text link: mor10.com, URL: http://mor10.com/ */
				__( 'Theme: %1$s ', 'Francis' ),
                                '<a href="http://thomasduda.com" rel="nofollow">' . esc_attr( 'Francis', 'Francis' ) . '</a>',
				'<a href="thomasduda.com/" rel="designer nofollow">' . esc_attr__( 'thomasduda.com', 'FrancisTheme' ) . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>