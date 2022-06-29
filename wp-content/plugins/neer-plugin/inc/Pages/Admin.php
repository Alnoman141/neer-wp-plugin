<?php

namespace Inc\Pages;

/**
 * @package NeerPlugin
 */
 
 use Inc\Base\BaseController;
 use Inc\Api\SettingsApi;

 class Admin extends BaseController{

    public $pages = array();

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
    }

    public function register(){
        $this->settings->addPages($this->pages)->register();
    }
 }