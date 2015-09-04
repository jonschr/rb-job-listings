<?php
/*
	Plugin Name: Intelligent Interiors Job Listings
	Plugin URI: http://redblue.us
	Description: Functionality specific to your site which should be maintained even if you switch themes
	Version: 1.0.2
    Author: Jon Schroeder
    Author URI: http://redblue.us
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
*/
// Plugin Directory 
define( 'RBCII_DIR', dirname( __FILE__ ) );

/**
 * Add the post type for job listings
 */
include_once( 'lib/post_type.php' );

/**
 * Add the banner for the top of the page
 */
include_once( 'lib/banner.php' );