<?php

/**
 * @package neer-plugin
 */
/*
Plugin Name: neer-plugin
Plugin URI: https://github.com/Alnoman141/neer-wp-plugin
Description: This is my first plugin for learning plugin development
Version: 1.0.0
Author: Abdullah Al Noman
Author URI: https://github.com/Alnoman141
License: GPLv2 or later
Text Domain: neer-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// all of the three methods below are the same
// if(!defined('ABSPATH')){
//     die;
// }

// define('ABSPATH') or die("You can't access this file directly.");

if(!function_exists('add_action')){
    echo "You can't access this file directly.";
    exit;
}
