<?php
/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 19:06
 */
require_once 'init.php';
$user = new User();
$user->logout();
Redirect::to('index.php');