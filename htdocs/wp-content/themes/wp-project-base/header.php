<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php do_action( 'baindesign_head' ); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>
			<?php wp_title( '|', true, 'right' ); ?>
		</title>
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( home_url() ); ?>/apple-touch-icon-152x152.png">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-196x196.png" sizes="196x196">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-160x160.png" sizes="160x160">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="<?php echo esc_url( home_url() ); ?>/favicon-32x32.png" sizes="32x32">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="<?php echo esc_url( home_url() ); ?>/mstile-144x144.png">

		<style type="text/css">
		  .js #flash {display: none;}
		</style>
		<script type="text/javascript">
		  document.documentElement.className = 'js';
		</script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php do_action( 'baindesign_body_top' ); ?>
		<?php do_action( 'baindesign_after_opening_body_tag' ); ?>
		<div id="page" class="hfeed site">
			<?php do_action( 'baindesign_pre_header' ); ?>
			<?php do_action( 'baindesign324_header_top' ); ?>
			<?php do_action( 'baindesign324_header_bottom' ); ?>
			<?php do_action( 'baindesign_post_header' ); ?>
			<?php do_action( 'baindesign_pre_content' ); ?>
			<div id="content">
				<?php do_action( 'baindesign_content_top' ); ?>