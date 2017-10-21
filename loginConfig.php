<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 10:56 AM
 */
include ('config2.php');
$email=$_POST['email'];
$password=$_POST['password'];

$user=new User();
$user->loginUser($email,$password);