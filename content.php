<?php
/**
 * default post content
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		
		<div class="featured-post">
			<?php _e( 'Featured post', 'greenhouse' ); ?>
		</div>
		<?php endif; ?>

        <div class="row  justify-content-md-center">
            <div class="col-md-8 col-sm-10 col-xs-12">
				<header class="entry-header">
					<div class="entry-meta">
						<span class="post-categories">
							<?php foreach((get_the_category()) as $category) { ?>
								<a href="<?php echo get_category_link($category->cat_ID);?>"><?php echo $category->category_nicename . ' '; ?></a>
							<?php }  ?>
						</span>
						<?php the_time('d/m/Y') ?>
					</div>		
					<?php if ( is_single() ) : ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php else : ?>
					<h1 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h1>
					<?php endif; // is_single() ?>
				</header><!-- .entry-header -->
			</div>
		</div>

		<div class="featured-image">
			<?php if ( ! post_password_required() && ! is_attachment() ) :
					the_post_thumbnail();
			endif; ?>
		</div>
        <div class="row  justify-content-md-center">
            <div class="col-md-8 col-sm-10 col-xs-12">		
				<div class="entry-content">
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'greenhouse' ) ); ?>
				</div><!-- .entry-content -->
			</div>
		</div>

        <div class="row  justify-content-md-center">
            <div class="col-md-8 col-sm-10 col-xs-12">
				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'greenhouse' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</div>
		</div>
	</article><!-- #post -->
