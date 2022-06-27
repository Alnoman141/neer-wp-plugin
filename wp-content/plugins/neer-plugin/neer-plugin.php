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

class NeerPlugin {

    public $plugin;

    function __construct(){
        $this->plugin = plugin_basename(__FILE__);
        add_action('init', array($this, 'custom_post_type'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
        
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    public function settings_link($links){
        $link = '<a href="admin.php?page=neer_plugin" >Settings</a>';
        array_push($links, $link);
        return $links;
    }

    function register(){
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    public function add_admin_menu(){
        add_menu_page('Neer Plugin', 'Neer Plugin', 'manage_options', 'neer_plugin', array($this, 'admin_index'), 'dashicons-editor-paste-word', 110);
    }

    public function admin_index(){
        require_once plugin_dir_path(__FILE__). 'templates/admin.php';
    }

    function activation(){
        // code to run when plugin is activated
        $this->custom_post_type();
        flush_rewrite_rules();
    }

    function deactivate(){
        // code to run when plugin is deactivated
        flush_rewrite_rules();
    }

    function uninstall(){
        echo "NeerPlugin uninstalled";
    }

    function custom_post_type(){
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }

    function enqueue(){
        // code to run when plugin is loaded
        wp_enqueue_style('neerStyle', plugins_url('/assets/neerStyle.css', __FILE__));
        wp_enqueue_script('neerScript', plugins_url('/assets/neerScript.js', __FILE__));
    }
}

if(class_exists('NeerPlugin')){
    $neerPlugin = new NeerPlugin();
    $neerPlugin->register();
}

// register activation hook
register_activation_hook( __FILE__, array( $neerPlugin, 'activation' ) );
// register_deactivation_hook( __FILE__, array( 'Akismet', 'plugin_deactivation' ) );

//  register deactivation hook
 register_deactivation_hook(__FILE__, array($neerPlugin, 'deactivate'));

// register uninstall hook
register_uninstall_hook(__FILE__, array($neerPlugin, 'uninstall'));