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
				<div class="buttons">
					<a id="showall">All</a>
					<a class="showSingle" target="1">Div 1</a>
					<a class="showSingle" target="2">Div 2</a>
					<a class="showSingle" target="3">Div 3</a>
					<a class="showSingle" target="4">Div 4</a>
				</div>

				<div id="div1" class="targetDiv">
					<?php
						$slug = basename(get_permalink());
						// echo '<h1 class="title">' . $slug . '</h1>';

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
				<div id="div2" class="targetDiv">
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
				<div id="div3" class="targetDiv">
					<?php
						$slug = basename(get_permalink());
						// echo '<h1 class="title">' . $slug . '</h1>';

						$args = array(
							'posts_per_page' =>100,
							'cat' => 2,
							'order' => 'DESC',
							'orderby' => 'date',
							'tag' => 'interactive-media'
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
				<div id="div4" class="targetDiv">
					<?php
						$slug = basename(get_permalink());
						// echo '<h1 class="title">' . $slug . '</h1>';

						$args = array(
							'posts_per_page' =>100,
							'cat' => 2,
							'order' => 'DESC',
							'orderby' => 'date',
							'tag' => 'j586'
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

				<script type="text/javascript">
					jQuery(function($){
					         jQuery('#showall').click(function(){
					               jQuery('.targetDiv').show();
					        });
					        jQuery('.showSingle').click(function(){
					              jQuery('.targetDiv').hide();
					              jQuery('#div'+$(this).attr('target')).show();
					        });
					});
				</script>

				<!-- <script type="text/javascript">
				function doSomething() {
					console.log("hi");
				    $.get("template-parts/graphic-design.php");
				    return true;
				}
				</script> -->

				<!-- <a href="#" onclick="doSomething();">Click Me!</a> -->




			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
