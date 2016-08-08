<div class="graphic-design">
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

<div class="graphic-design">
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

<div class="graphic-design">
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
