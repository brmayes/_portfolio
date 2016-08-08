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
					<li class="trigger"><a href="#box1"> Heading 1</a></li>
					<li class="trigger"><a href="#box2"> Heading 2</a></li>
					<li class="trigger"><a href="#box3"> Heading 3</a></li>
				</ul>
				<div class="work-container">
					<div class ="toggle" id="box1">
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

					<div class ="toggle" id="box2">
						<?php
							$slug = basename(get_permalink());
							// echo '<h1 class="title">' . $slug . '</h1>';

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

					<div class ="toggle" id="box3">
						<?php
							$tag = 'interactive-media';
							echo '<h1 class="title">' . $tag . '</h1>';

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
						$("a").click(function(){
						   var myelement = $(this).attr("href")
						    $(myelement).fadeIn("slow");
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
