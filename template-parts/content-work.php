<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">


		<?php if ( 'post' === get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry-header -->

	<a href="<?php the_permalink(); ?>">
		<?php // the_post_thumbnail(); ?>
		<img class="portfolio-thumnails" src="<?php the_post_thumbnail_url();	?>" />

	</a>

	<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<?php $tags = get_the_tags();
	if( $tags ) : ?>
	  <p class="tags">
	  <?php foreach( $tags as $tag ) { ?>
	   <a href="<?php echo get_tag_link($tag->term_id); ?>"><span class="post-tag <?php echo $tag->slug; ?>"><i class="icon-tag"></i> <?php echo $tag->name; ?></span></a>
	  <?php } ?>
	</p>
	<?php endif; ?>

</article><!-- #post-## -->
