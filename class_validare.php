<?php

 class Validare
 {
     private $username;
     private $email;
     
     public function Validare($username,$email)
     {
         $this->username=$username;
         $this->email=$email;
     }
     public function valid(Validare $user)
     {
         include_once 'connection.php';
         $sql="SELECT * FROM utilizator WHERE username='{$user->username}' OR email ='{$user->email}'";
         $query=mysqli_query($con,$sql)or die(mysqli_error($con));
         $result=mysqli_num_rows($query);
         return $result=='0';
     }
 }

