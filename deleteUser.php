<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 9:16 AM
 */

include ('config.php');

    $userId=$_POST['uId'];
    $user=new User();
    $user->deleteUser($userId);