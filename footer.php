<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package josie
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">
			<?php do_action( 'josie_credits' ); ?>
			<?php
			printf(
				/* translators: %s = text link: WordPress, URL: http://wordpress.org/ */
				__( 'Designed by %s', 'ThomasDuda' ),
				'<a href="http://www.chadrokeach.com/tom" rel="generator">' . esc_attr__( 'ThomasDuda', 'Josie' ) . '</a>'
				); ?>
			<span class="sep"> | </span>
			<?php
			printf(
				
				__( 'Theme: %1$s ', 'Josie' ),
                                '<a href="http://chadrokeach.com" rel="nofollow">' . esc_attr( 'Josie', 'Josie' ) . '</a>',
				'<a href="chadrokeach.com/" rel="designer nofollow">' . esc_attr__( 'chadrokeach.com', 'FrancisTheme' ) . '</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>