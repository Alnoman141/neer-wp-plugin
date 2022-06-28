<?php

namespace Inc\Base;

/**
 * @package NeerPlugin
 */

 class Enqueue {
    public function register() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }
    
    public function enqueue() {
        wp_enqueue_style('neerStyle', NEER_PLUGIN_URL . 'assets/neerStyle.css');
        wp_enqueue_script('neerScript', NEER_PLUGIN_URL . 'assets/neerScript.js');
    }
 }