<?php

namespace Inc\Pages;

/**
 * @package NeerPlugin
 */
 
 use Inc\Base\BaseController;
 use Inc\Api\SettingsApi;

 class Admin extends BaseController{

    public $pages = array();

    public $subpages = array();

    public $settings;

    public function __construct(){
        $this->settings = new SettingsApi();

        $this->pages = array(
            array(
                "page_title" => "Neer Plugin",
                "menu_title" => "Neer Plugin",
                "capability" => "manage_options",
                "menu_slug" => "neer_plugin",
                "callback" => function(){echo "<h1>Hello! Neer Plugin</h1>";},
                "icon_url" => "dashicons-store",
                "position" => 110
            ),
        );

        $this->subpages = array(
            array(
                "parent_slug" => "neer_plugin",
                "page_title" => "Custom Post Type",
                "menu_title" => "CPT",
                "capability" => "manage_options",
                "menu_slug" => "neer_plugin_cpt",
                "callback" => function(){echo "<h1>Custom Post Type</h1>";}
            ),
            array(
                "parent_slug" => "neer_plugin",
                "page_title" => "Custom Taxonomies",
                "menu_title" => "Taxonomies",
                "capability" => "manage_options",
                "menu_slug" => "neer_plugin_taxonomies",
                "callback" => function(){echo "<h1>Custom Taxonomies";}
            ),
            array(
                "parent_slug" => "neer_plugin",
                "page_title" => "Custom Widgets",
                "menu_title" => "Widgets",
                "capability" => "manage_options",
                "menu_slug" => "neer_plugin_widgets",
                "callback" => function(){echo "<h1>Custom Widgets";}
            ),
        );
    }

    public function register(){
        $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }
 }