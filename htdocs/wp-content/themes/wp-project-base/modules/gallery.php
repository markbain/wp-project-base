<div class="section gallery_wide">
	<div class="container">
		<?php 
		$images = get_sub_field('gallery_wide');
		$count = count( $images );
		if( $images ): ?>
		    <ul class="no-bullets post-count-<?php echo $count; ?>">
		        <?php foreach( $images as $image ): ?>
		            <li>
		            	<figure>			            	
		            	     <a href="<?php echo $image['description']; ?>"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> /></a>			            	
	            			<figcaption><?php echo $image['caption']; ?></figcaption>
		            	</figure>			            
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
	</div><!-- .container -->
</div><!-- .section -->