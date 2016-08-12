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
			<div id="page-work">
				<div class="posts-container">
					<?php
						$args = array(
							'posts_per_page' =>100,
							'cat' => 2,
							'order' => 'DESC',
							'orderby' => 'date'
						);
						$loop = new WP_Query( $args );

						if( $loop->have_posts() ) :
							single_cat_title();

						while( $loop->have_posts() ) : $loop->the_post();
							get_template_part( 'template-parts/content-work' );

						endwhile;

						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
