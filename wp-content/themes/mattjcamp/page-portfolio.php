<?php get_header(); ?>

	<?php

	if ( have_posts() ) :

	// Loop Start
	while ( have_posts() ) : the_post();


		echo '<div class="post-content">AAA';
			the_content('');

			// Post Pagination
			$defaults = array(
				'before' => '<p class="single-pagination">'. esc_html__( 'Pages:', 'savona' ),
				'after' => '</p>'
			);

			wp_link_pages( $defaults );
		echo '</div>';

	endwhile; // Loop End

	endif;

	?>


		<?php get_template_part( 'templates/single/comments', 'area' ); ?>



<?php get_footer(); ?>