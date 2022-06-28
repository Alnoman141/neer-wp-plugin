<?php

/**
 * @package NeerPlugin
 */

 namespace Inc\Base;

 class Deactivate {
    public static function deactivate(){
        // code to run when plugin is deactivated
        flush_rewrite_rules();
    }
 }