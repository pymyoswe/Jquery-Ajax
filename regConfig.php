<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 10:14 AM
 */
include ('config2.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];

$user=new User();
$user->registerUser($name,$email,$password,$password_confirm);