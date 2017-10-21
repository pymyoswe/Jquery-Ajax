<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 10:17 AM
 */

class User{
    public function __construct()
    {
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=Ajax','root','root');
        }catch (PDOException $e){
            die($e);
        }
    }
    public function registerUser($name,$email,$password,$password_confirm){
        if($name){
            $q="select name from access_user where name='$name'";
            $res=$this->db->query($q)->fetch(PDO::FETCH_ASSOC);
            if(!$res){
                if($email){
                    $q="select email from access_user where email='$email'";
                    $res=$this->db->query($q)->fetch(PDO::FETCH_ASSOC);
                    if(!$res){
                        if($password){
                            if($password_confirm){
                                if($password==$password_confirm){
                                    $pwEncrypt=md5($password);
                                    $q="insert into access_user (name,email,password) values ('$name','$email','$pwEncrypt')";
                                    $result=$this->db->query($q);
                                    if($result){
                                        echo "<span class='alert alert-success'>Successfully created !</span>";
                                    }else{
                                        echo "<span class='alert alert-danger'>Failed !</span>";
                                    }
                                }else{
                                    echo "<span class='alert alert-danger'>Password does not match !</span>";
                                }
                            }else{
                                echo "<span class='alert alert-danger'>Please fill your password confirm !</span>";
                            }
                        }else{
                            echo "<span class='alert alert-danger'>Please fill your password !</span>";
                        }
                    }else{
                        echo "<span class='alert alert-danger'>Email is already exits!</span>";
                    }
                }else{
                    echo "<span class='alert alert-danger'>Please fill your email !</span>";
                }
            }else{
                echo "<span class='alert alert-danger'>User name is already exits!</span>";
            }
        }else{
            echo "<span class='alert alert-danger'>Please fill your name !</span>";
        }
    }
    public function loginUser($email,$password){

        if($email){
            if($password){
                $pEncrypt=md5($password);
                $q="select email,password from access_user where email='$email' && password='$pEncrypt'";
                $res=$this->db->query($q)->fetch(PDO::FETCH_ASSOC);
                if($res){
                    echo "<span class='alert alert-success'>Login success !</span>";
                }else{
                    echo "<span class='alert alert-danger'>Login failed !</span>";
                }
            }else{
                echo "<span class='alert alert-danger'>Please fill your password !</span>";
            }
        }else{
            echo "<span class='alert alert-danger'>Please fill your email !</span>";
        }

    }
}