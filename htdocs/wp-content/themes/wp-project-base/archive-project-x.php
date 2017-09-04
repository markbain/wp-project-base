<?php get_header();?>
<div id="post-header" class="section">
	<div class="container">
		<h1 class="page-title">
			<?php
				$title = '';
				if ( is_post_type_archive( 'testimonial' ) ) {
					if ( get_field( 'testimonial_archive_title', 'option' ) ) {
						$title = get_field( 'testimonial_archive_title', 'option' );
					} else {
						$title = the_archive_title();
					} 	 
				} elseif ( is_post_type_archive( 'book' ) ) {
					if ( get_field( 'book_archive_title', 'option' ) ) {
						$title = get_field( 'book_archive_title', 'option' );
					} else {
						$title = the_archive_title();
					} 	 
				} elseif ( is_post_type_archive( 'talk' ) ) {
					if ( get_field( 'talk_archive_title', 'option' ) ) {
						$title = get_field( 'talk_archive_title', 'option' );
					} else {
						$title = the_archive_title();
					} 	 
				} elseif ( is_post_type_archive( 'project' ) ) {
					if ( get_field( 'project_archive_title', 'option' ) ) {
						$title = get_field( 'project_archive_title', 'option' );
					} else {
						$title = the_archive_title();
					} 	 
				} elseif ( is_post_type_archive( 'article' ) ) {
					if ( get_field( 'article_archive_title', 'option' ) ) {
						$title = get_field( 'article_archive_title', 'option' );
					} else {
						$title = the_archive_title();
					} 
				} else {
					$title = the_archive_title();
				} 

				echo $title;
			?>
		</h1>

		<?php
			$intro = '';
			if ( is_post_type_archive( 'testimonial' ) ) {
				if ( get_field( 'testimonial_archive_intro', 'option' ) ) {
					$intro = get_field( 'testimonial_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'book' ) ) {
				if ( get_field( 'book_archive_intro', 'option' ) ) {
					$intro = get_field( 'book_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'talk' ) ) {
				if ( get_field( 'talk_archive_intro', 'option' ) ) {
					$intro = get_field( 'talk_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'project' ) ) {
				if ( get_field( 'project_archive_intro', 'option' ) ) {
					$intro = get_field( 'project_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 	 
			} elseif ( is_post_type_archive( 'article' ) ) {
				if ( get_field( 'article_archive_intro', 'option' ) ) {
					$intro = get_field( 'article_archive_intro', 'option' );
				} else {
					$intro = get_the_archive_description();
				} 
			} else {
				$intro = get_the_archive_description();
			} 

		   	if ( $intro ) {
		    	echo '<div class="intro intro-page">' . $intro . '</div>';
		    }
		?>
	</div><!-- .container -->
</div><!-- #intro .section -->	

<?php 
	$args = array(
		'posts_per_page'=> -1,
		'post_type'		=> 'project',
		'meta_query'	=> array(
			array(
			    'key' => 'project_featured',
			    'compare' => '==',
			    'value'   => '1',
			),
		),
	);

	// query
	$the_query = new WP_Query( $args );


	if ( $the_query->have_posts() ) : ?>

	<div class="posts-section posts-featured section">
		<div class="container media-object-container">
			<?php while ( $the_query->have_posts() ):
				$the_query->the_post();
				get_template_part( 'content-archive');
			endwhile; ?>
		</div><!-- .container -->
	</div><!-- .section -->

	
<?php endif; ?>		
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

<?php 
	$args = array(
		'posts_per_page'=> 12,
		'post_type'		=> 'project',
		'meta_query'	=> array(
			array(
			    'key' => 'project_featured',
			    'compare' => '==',
			    'value'   => '0',
			),
		),
	);

	// query
	$the_query = new WP_Query( $args );


	if ( $the_query->have_posts() ) : ?>
	<div class="posts-section posts-not-featured section">
		<div class="container">
		<h2 class="section-title">
			<?php
				$title = '';
				if ( get_field( 'project_section_title_other_projects', 'option' ) ) {
					$title = get_field( 'project_section_title_other_projects', 'option' );
				}
				echo $title;
			?>
		</h2>

		<?php
			$intro = '';
			if ( get_field( 'project_past_clients_section_intro', 'option' ) ) {
				$intro = get_field( 'project_past_clients_section_intro', 'option' );
				echo '<div class="intro intro-section">' . $intro . '</div>';
			} 
		?>
	</div><!-- .container -->
		<div class="container media-object-container">
			<?php while ( $the_query->have_posts() ):
				$the_query->the_post();
				get_template_part( 'content-archive');
			endwhile; ?>
		</div><!-- .container -->
	</div><!-- .section -->
	

	
<?php endif; ?>		
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
<?php get_footer();?>