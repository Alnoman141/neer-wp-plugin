<?php
/**
 * @package NeerPlugin
 */
namespace Inc\Base;

class SettingsLinks {
    public function register() {
        // code to run when plugin is activated
        add_filter('plugin_action_links_'. NEER_PLUGIN, array($this, 'settings_link'));
    }

    public function settings_link($links){
        $settings_link = '<a href="admin.php?page=neer_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}