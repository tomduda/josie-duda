





    
    
            
            
                        comments_popup_link( __( 'Leave a comment', 'josie' ), __( '1 Comment', 'josie' ), __( '% Comments', 'josie' ) );
                        echo '</span>';
                        echo '<span class="comments-link">';
                    <?php 
                    <?php edit_post_link( __( 'Edit', 'josie' ), '<span class="edit-link">', '</span>' ); ?>
                    <?php josie_posted_on(); ?>
                    ?>
                    echo '<div class="category-list">' . $category_list . '</div>';
                    if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { 
                    }
                $category_list = get_the_category_list( __( ', ', 'josie' ) );
                'after'  => '</div>',
                'before' => '<div class="page-links">' . __( 'Pages:', 'josie' ),
                /* translators: used between list items, there is a space after the comma */
                <?php echo get_avatar(get_the_author_meta('ID'), 129);?>
                if ( josie_categorized_blog() ) {
                }
               <p><?php echo get_the_author_meta('nickname')?></p>
            ) );
            </div>
            <?php
            <div class="about-author-image">
            <div class="about-author-text"><h6>About the Author</h6></div>
            ?>
            echo get_the_tag_list( '<ul><li><i class="fa fa-tag"></i>', '</li><li><i class="fa fa-tag"></i>', '</li></ul>' );
            wp_link_pages( array(
        </div> -->
        </div><!-- .entry-meta -->
        <?php
        <?php
        <?php the_content(); ?>
        <div class="entry-meta">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <h1>This is content-single.php</h1>
        ?>
        ?>
        echo '</div>';
        echo '</div>';
        echo '<div class="image-shifter">';
        echo '<div class="single-post-thumbnail clear">';
        josie_the_responsive_thumbnail( get_the_ID() );
      <!--  <div class="about-author ">
    </div><!-- .entry-content -->
    </footer><!-- .entry-footer -->
    </header><!-- .entry-header -->
    <?php 
    <div class="entry-content">
    <footer class="entry-footer">
    <header class="entry-header clear">
    ?>
    if (has_post_thumbnail()) {
    }
 * 
 * @package josie
 * Outputs the single post content. Displayed by single.php.
 */
/**
</article><!-- #post-## -->
<?php
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
?>