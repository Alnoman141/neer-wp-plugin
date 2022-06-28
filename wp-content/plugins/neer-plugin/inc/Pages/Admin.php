<?php

namespace Inc\Pages;

/**
 * @package NeerPlugin
 */

 class Admin {
    public function register(){
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }

    public function add_admin_menu(){
        add_menu_page('Neer Plugin', 'Neer Plugin', 'manage_options', 'neer_plugin', array($this, 'admin_index'), 'dashicons-editor-paste-word', 110);
    }

    public function admin_index(){
        require_once NEER_PLUGIN_PATH. 'templates/admin.php';
    }
 }