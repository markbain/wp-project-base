<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php do_action( 'baindesign_head' ); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>
			<?php wp_title( '|', true, 'right' ); ?>
		</title>
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">

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