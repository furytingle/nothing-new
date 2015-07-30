<?php

/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 18:52
 */
class Redirect {
    public static function to($location = null) {
        if($location) {
            if(is_numeric($location)) {
                switch($location) {
                    case 404:
                        header('HTTP/1.0 404 Not Found');
                        include '../error/404.php';
                        break;
                }
            }
            header('Location: '. $location);
            exit();
        }
    }
}