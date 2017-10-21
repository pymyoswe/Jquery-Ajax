<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/3/17
 * Time: 7:40 AM
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
    public function addUser($name,$email,$age){
       $q="insert into users (name,email,age) values ('$name','$email','$age')";
       $result=$this->db->query($q);
       if($result){
           echo "Success";
       }else{
           echo "Failed";
       }
    }
    public function showUser(){
        $q="select * from users";
        return $this->db->query($q);
    }
    public function deleteUser($userId){
        $q="delete from users where id='$userId'";
        return $this->db->query($q);
    }
}