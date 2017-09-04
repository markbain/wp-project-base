<div id="featured-clients" class="section acf-repeater">
	<div class="container">
		<?php

					$clients = get_field('home_page_featured_clients');

					if( $clients ): ?>
						<h3 class="section-title"><?php the_field('featured_clients_title', 'option'); ?></h3>
					    <ul class="no-bullets">
					        <?php foreach( $clients as $client ): ?>
					            <li>
					                <a href="<?php echo $client['client_url']; ?>">
					                     <?php echo $client['client_name']; ?>
					                </a>
					                
					            </li>
					        <?php endforeach; ?>
					    </ul>
					<?php endif; ?>

	</div><!-- .container -->
</div><!-- .section --> 