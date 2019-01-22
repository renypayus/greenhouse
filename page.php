<?php
/**
 * Page Template
 */
get_header(); ?>

    <div class="container">
        <div class="row  justify-content-md-center">
            <div class="col-md-8 col-sm-10 col-xs-12">
                <div class="content-wrapper">
                    <div id="content" role="main">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', 'page' ); ?>
                        <?php endwhile; // end of the loop. ?>
                    </div><!-- #content -->                
                </div> <!-- content-wrapper -->
            </div>
        </div>
    </div>
<?php get_footer(); ?>
