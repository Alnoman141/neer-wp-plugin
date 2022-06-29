<?php

namespace Inc\Base;

/**
 * @package NeerPlugin
*/

use Inc\Base\BaseController;

 class Enqueue extends BaseController{
    public function register() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }
    
    public function enqueue() {
        wp_enqueue_style('neerStyle', $this->plugin_url . 'assets/neerStyle.css');
        wp_enqueue_script('neerScript', $this->plugin_url . 'assets/neerScript.js');
    }
 }