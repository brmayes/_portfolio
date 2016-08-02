<?php
/**
 * The template for displaying thoughts page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				$args = array ( 'category' => 3, 'posts_per_page' => 1);
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :  setup_postdata($post);
				 ?>

				 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				 	<header class="entry-header">
				 		<h1>hiiii</h1>
				 		<?php
				 			if ( is_single() ) {
				 				the_title( '<h1 class="entry-title">', '</h1>' );
				 			} else {
				 				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				 			}

				 		if ( 'post' === get_post_type() ) : ?>
				 		<div class="entry-meta">
				 			<?php _portfolio_posted_on(); ?>
				 		</div><!-- .entry-meta -->
				 		<?php
				 		endif; ?>
				 	</header><!-- .entry-header -->

				 	<div class="entry-content">
				 		<?php
				 			the_content( sprintf(
				 				/* translators: %s: Name of current post. */
				 				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_portfolio' ), array( 'span' => array( 'class' => array() ) ) ),
				 				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				 			) );

				 			wp_link_pages( array(
				 				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_portfolio' ),
				 				'after'  => '</div>',
				 			) );
				 		?>
				 	</div><!-- .entry-content -->

				 	<footer class="entry-footer">
				 		<?php _portfolio_entry_footer(); ?>
				 	</footer><!-- .entry-footer -->
				 </article><!-- #post-## -->

			<?php endforeach; ?>

			<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
