<?php
/**
 * Category Template
 */
get_header(); ?>
    <div class="container">
		<div class="row  justify-content-md-center">
			<div class="col-md-8 col-sm-10 col-xs-12">
				<div class="content-wrapper">
					<div id="content" role="main">                   
                        <?php if ( have_posts() ) : ?>
                        <header class="archive-header">
                            <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'greenhouse' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

                        <?php if ( category_description() ) : // Show an optional category description ?>
                            <div class="archive-meta"><?php echo category_description(); ?></div>
                        <?php endif; ?>
                        </header><!-- .archive-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();

                            /* Include the post format-specific template for the content. If you want to
                            * this in a child theme then include a file called content-___.php
                            * (where ___ is the post format) and that will be used instead.
                            */
                            get_template_part( 'content', get_post_format() );

                        endwhile;?>

                        <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>
                        <?php endif; ?>
					</div><!-- #content -->                
				</div> <!-- content-wrapper -->
			</div>
		</div>
	</div> <!-- container -->

<?php get_footer(); ?>
