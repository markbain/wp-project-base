<?php

/*
  Plugin Name: WP Project Base Custom Plugin
  Description: Adds custom functionality to the WP Project Base site
  Author: Bain Design
  Version: 0.0.0
  Author URI: http://bain.design
  License: GNU General Public License v2.0
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
  Text Domain: _baindesign_plugin
  Domain Path: /languages/
*/

 /**
  * Load plugin textdomain.
  *
  */


 function baindesign_load_textdomain() {
   load_plugin_textdomain( '_baindesign_plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
 }
 add_action( 'init', 'baindesign_load_textdomain' );

/*
 *  Custom Post Types
 */

include_once('inc/cpt/custom-post-types.php');

/*
 *  Misc
 */

include_once('inc/misc/misc.php'); 

/*
 *  Plugins
 */

include_once('inc/plugins/plugins.php');