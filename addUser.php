<?php
include ('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];

    $user=new User();
    $user->addUser($name,$email,$age);
