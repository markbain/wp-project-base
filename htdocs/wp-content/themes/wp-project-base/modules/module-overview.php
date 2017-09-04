<div id="overview">

	<div class="container">
		<div class="media-object-container">

  			<?php
  				// Retrieve custom taxonomy terms using get_terms and the custom post type.
    			$categories = get_terms('section');
   				// Iterate through each term
    			foreach ( $categories as $category ) : 
                    $post_title = get_the_title();
                    $post_link = get_the_permalink();

                    // The $category is an object, so we don't need to specify the $taxonomy.
                    $term_link = get_term_link( $category );
            ?>
    				<div id="<?php echo $category->name; ?>-<?php echo $category->slug; ?>" <?php post_class( 'media-object' ); ?>>
                    <article class="media-object-content" style="width: 100%;">
                        
                        <header class="entry-title">
                            <h3><a href="<?php echo esc_url( $term_link );  ?>"><?php echo $category->name; ?></a></h3>
                        </header>
                            <ul class="menu">
    				        <?php
        				     //Setup the query to retrieve the posts that exist under each term
        				      $posts = get_posts(array(
        				        'post_type' => 'content_cpt',
        				        'orderby' => 'menu_order',
        				        'order' =>  'ASC',
        				        'taxonomy' => $category->taxonomy,
        				        'term'  => $category->slug,
        				        'nopaging' => true,
        				        ));
        				      // Here's the second, nested foreach loop that cycles through the posts associated with this category
        				      foreach($posts as $post) :
        				        setup_postdata($post); ////set up post data for use in the loop (enables the_title(), etc without specifying a post ID--as referenced in the stackoverflow link above)
        				      ?>
                              

        				        <li><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><span class="course-id"><?php echo get_field('course_id'); ?></span><span class="course-title"><?php the_title(); ?></span></a></li>

        				      <?php endforeach; ?>

    				    </ul>
                        <footer class="read-more">
                            <a href="<?php echo esc_url( $term_link );  ?>" title="<?php _e( 'Go to', '_criadoemsampa' ); ?> <?php echo $post_title ?>">
                                <span class=""><?php _e( 'Read more', '_criadoemsampa' ); ?> </span><i class="fa"></i>
                            </a>
                        </footer>
    				  </article><!-- .media-object-content -->
    				</div><!-- .media-object -->
           		<?php endforeach; 
       		?>
		</div><!-- .media-object-container -->
	</div><!-- .container -->
</div><!-- .section -->