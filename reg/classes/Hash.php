<?php

/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 18:48
 */
class Hash {
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }
    public static function salt($length) {
        return mcrypt_create_iv($length);
    }
    public static function unique() {
        return self::make(uniqid());
    }
}