<?php

/**
 * @package NeerPlugin
 */

 namespace Inc;

 class Deactivate {
    public static function deactivate(){
        // code to run when plugin is deactivated
        flush_rewrite_rules();
    }
 }