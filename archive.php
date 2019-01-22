<?php
/**
 * Archive Template
 */
get_header(); ?>
    <div class="container">
		<div class="row  justify-content-md-center">
			<div class="col-md-8 col-sm-10 col-xs-12">
				<div class="content-wrapper">
					<div id="content" role="main">
                        <?php if ( have_posts() ) : ?>
                            <header class="archive-header">
                                <h1 class="archive-title"><?php
                                    if ( is_day() ) :
                                        printf( __( 'Daily Archives: %s', 'greenhouse' ), '<span>' . get_the_date() . '</span>' );
                                    elseif ( is_month() ) :
                                        printf( __( 'Monthly Archives: %s', 'greenhouse' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'greenhouse' ) ) . '</span>' );
                                    elseif ( is_year() ) :
                                        printf( __( 'Yearly Archives: %s', 'greenhouse' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'greenhouse' ) ) . '</span>' );
                                    else :
                                        _e( 'Archives', 'greenhouse' );
                                    endif;
                                ?></h1>
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
