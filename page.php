<?php
/**
 * Page Template
 */
get_header(); ?>

    <?php while ( have_posts() ) : the_post(); 
    //get featured image url
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    ?> 
        <article>   
            <div class="content" id="content" role="main">
                <div class="container">
                    <div class="row  justify-content-md-center">
                        <div class="col-md-8 col-sm-10 col-xs-12">
                            <header class="entry-header">
                                <?php if ( is_single() ) : ?>
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                                <?php else : ?>
                                <h1 class="entry-title">
                                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                </h1>
                                <?php endif; // is_single() ?>
                            </header><!-- .entry-header -->	
                            <div class="entry-content">
                                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'greenhouse' ) ); ?>
                            </div><!-- .entry-content -->
                            
                            <footer class="entry-meta">
                                <?php edit_post_link( __( 'Edit', 'greenhouse' ), '<span class="edit-link">', '</span>' ); ?>
                            </footer><!-- .entry-meta -->
                        </div>
                    </div>         
                </div> <!-- container-->
            </div>    <!-- content -->
        </article><!-- post -->    
    <?php endwhile; // end of the loop. ?>   

<?php get_footer(); ?>
