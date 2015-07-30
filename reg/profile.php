<?php
/**
 * Created by PhpStorm.
 * User: glimpse
 * Date: 25.07.15
 * Time: 19:08
 */
require_once 'init.php';
if(!$username = Input::get('user')) {
    Redirect::to('index.php');
} else {
    $user = new User($username);
    if(!$user->exists()) {
        Redirect::to(404);
    } else {
        $data = $user->data();
        ?>

        <h3><?php echo escape($data->username); ?></h3>
        <p>Name: <?php echo escape($data->name); ?></p>

        <?php
    }
}