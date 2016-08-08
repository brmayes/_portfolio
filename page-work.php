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
				<ul>
					<li class="trigger"><a href="#box1">All</a></li>
					<li class="trigger"><a href="#box2">Graphic Design</a></li>
					<li class="trigger"><a href="#box3">Interactive Media</a></li>
				</ul>
				<div class ="toggle" id="box1">
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

				<div class ="toggle" id="box2">
					<div class="posts-container">
						<?php
							$tag = 'graphic-design';
							$args = array(
								'posts_per_page' =>100,
								'cat' => 2,
								'order' => 'DESC',
								'orderby' => 'date',
								'tag' => 'graphic-design'
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

				<div class ="toggle" id="box3">
					<div class="posts-container">
						<?php
							$tag = 'interactive-media';
							$args = array(
								'posts_per_page' =>100,
								'cat' => 2,
								'order' => 'DESC',
								'orderby' => 'date',
								'tag' => $tag
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

				<script type="text/javascript">
					jQuery(function($){
						$("a").click(function($e){
							$e.preventDefault();
						   var myelement = $(this).attr("href")
							 	$(myelement).fadeOut( 1200 );
						    $(myelement).fadeIn( 1200 );
						    $(".toggle:visible").not(myelement).hide();
						});
					});
				</script>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
