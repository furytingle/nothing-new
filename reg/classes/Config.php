<?php

/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 18:39
 */
class Config {
    public static function get($path = null) {
        if ($path){
            $config = $GLOBALS['config'];
            $path = explode('/', $path);
            foreach($path as $bit) {
                if(isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }
            return $config;
        }
        return false;
    }
}