<?php
/**

 * Plugin Name: WP Remove Authors Sitemap from Yoast SEO
 * Plugin URI: https://eastsidecode.com
 * Description: This plugin removes the author from the Yoast SEO Sitemap
 * Version: 1.1
 * Author: EastSide Code
 * Author URI: http://eastsidecode.com
 * License: GPL12

 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class esCodeRemoveAuthorsSitemap {

	function __construct() {
				
		// add the filter 
		add_filter( 'wpseo_sitemap_exclude_author', function() {
			return []; 
		}, 10, 1 ); 


	} // end construct

} // end class


// initialise the class with an object
$esCodeRemoveAuthorsInit = new esCodeRemoveAuthorsSitemap();