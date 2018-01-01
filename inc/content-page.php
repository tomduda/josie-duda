<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package joshua
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php 
    if (has_post_thumbnail()) {
        echo '<div class="single-post-thumbnail clear">';
        echo '<div class="image-shifter">';
        joshua_the_responsive_thumbnail( get_the_ID() );
        echo '</div>';
        echo '</div>';
    }
    ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'joshua' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'joshua' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
