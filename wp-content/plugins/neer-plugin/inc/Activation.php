<?php
/**
 * @package NeerPlugin
 */
namespace Inc;

class Activation {
    public static function activate() {
        // code to run when plugin is activated
        flush_rewrite_rules();
    }
}