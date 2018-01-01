<?php
/**
 * Outputs the single post content. Displayed by single.php.
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
    
	<header class="entry-header clear">
            
            <?php
                /* translators: used between list items, there is a space after the comma */
                $category_list = get_the_category_list( __( ', ', 'joshua' ) );

                if ( joshua_categorized_blog() ) {
                    echo '<div class="category-list">' . $category_list . '</div>';
                }
            ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
                    <?php joshua_posted_on(); ?>
                    <?php 
                    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
                        echo '<span class="comments-link">';
                        comments_popup_link( __( 'Leave a comment', 'joshua' ), __( '1 Comment', 'joshua' ), __( '% Comments', 'joshua' ) );
                        echo '</span>';
                    }
                    ?>
                    <?php edit_post_link( __( 'Edit', 'joshua' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
        <h1>This is content-single.php</h1>
      <!--  <div class="about-author ">
            <div class="about-author-image">
                <?php echo get_avatar(get_the_author_meta('ID'), 129);?>
               <p><?php echo get_the_author_meta('nickname')?></p>
            </div>
            <div class="about-author-text"><h6>About the Author</h6></div>
            
        </div> -->

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'joshua' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
