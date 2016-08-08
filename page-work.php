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

				<div id="div1" class="targetDiv">Lorum Ipsum1</div>
				<div id="div2" class="targetDiv">Lorum Ipsum2</div>
				<div id="div3" class="targetDiv">Lorum Ipsum3</div>
				<div id="div4" class="targetDiv">Lorum Ipsum4</div>

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
