<?php

if(isset($_POST["submit"]))
       {
             if($_POST['rezultat']==$_POST["corect"]) 
             {
             require_once 'connection.php';
             include 'class_utilizator.php';
             $date=date("Y/m/d");
             $user=new Utilizator($_POST['username'], $_POST['email'], $_POST['password'], $date);
             $sql="INSERT INTO utilizator (username,email,password,regdate) VALUES ('{$user->get_username()}','{$user->get_email()}'"
             . ",'{$user->get_password()}','{$user->get_regdate()}')";
             mysqli_query($con,$sql)or die(mysqli_error($con));
            header("Location:index.php");        
            }
            else
            {
            header("Location:inregistrare.php"); 
            } 
       
       }
