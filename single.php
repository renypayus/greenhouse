<?php
/**
 * Single posts template
 */

get_header(); ?>

    <div class="container">
        <div class="content-wrapper">
            <div id="content" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; // end of the loop. ?>
            </div><!-- #content -->                
        </div> <!-- content-wrapper -->
    </div>
<?php get_footer(); ?>