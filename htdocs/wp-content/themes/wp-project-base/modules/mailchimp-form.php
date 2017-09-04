<?php 
	// Mailchimp Form
 ?>
 <div id="mailchimp-form-front" class="section mailchimp-form">
	<div class="container">
		<header>
			<h2 class="home-section-title"><?php _e( 'Get Updates', '_mbdmaster' ); ?></h2>
		</header>
		<div id="mc_embed_signup">
			<?php // TO DO replace with value from options ?>
			<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate inline-a" target="_blank" novalidate>
				<div class="mc-field-group">
					<label for="mce-FNAME">First Name </label>
					<input type="text" value="" placeholder="Your First Name" name="FNAME" class="" id="mce-FNAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-LNAME">Last Name </label>
					<input type="text" value="" placeholder="Your Last Name" name="LNAME" class="" id="mce-LNAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
					<input type="email" value="" laceholder="Your Email" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>



				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

		    	<div style="position: absolute; left: -5000px;"><input type="text" name="b_e7958e37f3d67cd9c98e24f6c_7b25b42e09" tabindex="-1" value=""></div>


			    	<div class="clear">
			    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
					</div>
			</form>
		</div><!--End mc_embed_signup-->
		<small><?php _e( 'You\'ll never get spam from me, and you can unsubscribe easily at any time.', '_mbdmaster' ); ?></small>
	</div><!-- .container -->
</div><!-- .section -->