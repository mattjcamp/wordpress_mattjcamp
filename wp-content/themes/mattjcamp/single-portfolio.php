<?php get_header(); ?>

<!-- Page Content -->

<div class="main-content-portfolio">

	<!-- Main Container -->
	<div class="main-content clear-fix<?php echo ( savona_options( 'general_single_width' ) === 'boxed'  ) ? ' boxed-wrapper': ''; ?>" data-layout="<?php echo esc_attr( savona_page_layout() ); ?>" data-sidebar-sticky="<?php echo esc_attr( savona_options( 'general_sidebar_sticky' )  ); ?>">

		<?php

		// Single Post
		get_template_part( 'templates/single/post-portfolio', 'content' );

		// Author Description
		if ( savona_options( 'single_page_show_author_desc' ) === true ) {
			get_template_part( 'templates/single/author', 'description' );
		}



		?>

	</div><!-- .main-container -->




</div> <!-- main-content-portfolio -->

<?php get_footer(); ?>