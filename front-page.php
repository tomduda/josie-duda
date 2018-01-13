<?php get_header(); ?>


<!-- Website portfolio section or Services -->

<section id="services">

    <?php 
    $args = array('posts_per_page' => 6,'orderby' => 'rand','category_name' => 'web_design_portfolio');
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post(); 
            echo "<div class='website-portfolio-box'>";
            echo '<h3>' . get_the_title() . '</h3>';
            the_content(); 
            echo "</div>";
        endwhile;

    endif;
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
    
</section><!-- #services -->

<!-- Portfolio overview Begin -->
<div id="par-box1" ><h2 class="hide">About Me</h2></div>
<div id="prlx_lyr_3"></div>
<section id="meet">
    <div class="indent clear">
    <?php 
        $args = array('posts_per_page' => 3,'orderby' => 'rand','category_name' => 'about_tom');
        $query = new WP_Query( $args );
        // The Loop
        if ( $query->have_posts() ) :
            echo '<ul class="about-tom">';
            // counter furnished to provide each class a unique id
            $i = 0; //Counter created to furnish a unique ID number to the end of each class
            while ( $query->have_posts() ) :
                 $query->the_post();
    ?>
                <div class="about-tom-text-<?php echo $i ?> " class= "hide"> 
                    <h3 class="about-tom-name"><?php the_post_thumbnail(); ?><br /><?php echo get_the_title() ?> </h3>
                <?php
                the_content('');
                echo '</div>';
                $i++;
            endwhile;
        endif;
    /* Restore original Post Data */
    wp_reset_postdata();

                ?>
    </div><!-- .indent -->
</section><!-- #meet -->

<!-- Testimonials Begin -->
<div id="par-box2" ><h2 class="hide">Testimonials</h2></div>
<div id="prlx_lyr_1"></div>
<section id="testimonials">
<div class="indent clear">
<?php 

    $args = array('posts_per_page' => 3,'orderby' => 'rand','category_name' => 'testimonials');
    $query = new WP_Query( $args );
    // The Loop
    if ( $query->have_posts() ) :
        echo '<ul class="testimonials">';
        $i = 0; // Class identifier counter
        while ( $query->have_posts() ) :
            $query->the_post();
            $more = 0; // Global variable so I can use the read more link
            ?>
            <li class="clear testimonial-box-<?php echo $i ?>">
                <figure class="testimonial-thumb">
                    <?php the_post_thumbnail('testimonial-mug'); ?>
                </figure>
                <aside class="testimonial-text">
                <?php echo '<h3 class="testimonial-name">' . get_the_title() . '</h3>'; ?>
                         <div class="testimonial-excerpt">
                            <?php the_content(''); echo '</div>';
                            echo '</aside>';
                            echo '</li>';
                            // incriment counter to add to testimonial-box div
                            $i += 1;
        endwhile;
        echo '</ul>';
    endif;
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
</div><!-- .indent -->
</section><!-- #testimonials -->

<!--Resume section-->
<div id="par-box3" ><h2 class="hide">Resume</h2></div>
<div id="prlx_lyr_4"></div>
<section id="resume">
    <div class="indent clear">
<?php 
$query = new WP_Query( 'pagename=resume' );
// The Loop
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        echo '<h2 class="section-title">' . get_the_title() . '</h2>';
        echo '<div class="entry-content">';
        echo '<div class="resume-border">';
            the_content();
        echo '</div>';
    endwhile;
endif;
/* Restore original Post Data */
wp_reset_postdata(); ?>
</section><!-- #contact -->

<!-- Contact information  -->
<div id="par-box3" ><h2 class="hide">Contact</h2></div>
<div id="prlx_lyr_4"></div>
<section id="contact">
    <?php 
    $query = new WP_Query( 'pagename=contact' );
    // The Loop
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) :
            $query->the_post();
            echo '<h2 class="section-title">' . get_the_title() . '</h2>';
            echo '<div class="entry-content">';
            the_content();
        endwhile;
    endif;
/* Restore original Post Data */
wp_reset_postdata(); ?>
</section><!-- #contact -->

<!-- Footer section begins -->
<?php get_footer(); ?>



