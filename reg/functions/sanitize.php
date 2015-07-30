<?php
/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 18:27
 */

require_once 'init.php';

function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}
