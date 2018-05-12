<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'connection.php';
        $user;
        if(isset($_POST['submit']))
        {
            if(isset($_POST['username'])&&isset($_POST['password']))
            {
                $sql="SELECT * FROM utilizator WHERE username='{$_POST['username']}'";
                $query=mysqli_query($con,$sql)or die(mysqli_error($con));
                $row=mysqli_fetch_array($query);
                
                if($row['username']=='admin'&& $row['password']==md5($_POST['password']))
                {
                    $_SESSION["username"]="admin";
                    $_SESSION["password"]="admin";
                    setcookie('username',$_POST['username'],false);
                    setcookie('password',md5($_POST['password']),false);
                    header("Location:admin.php");
                }
                else
                if($row['password']==md5($_POST['password']))
                {
                    if(isset ($_POST['rememberme']))
                    {
                        setcookie('username',$_POST['username'],time()+60*60*24*365);
                        setcookie('password',md5($_POST['password']),time()+60*60*24*365);
                                         
                    }
                     else
                    {
                    /*cookie expires when browser closes*/
                    setcookie('username',$_POST['username'],false);
                    setcookie('password',md5($_POST['password']),false);
                    }
                    $_SESSION["username"]=$_POST['username'];
                    $_SESSION["password"]=md5($_POST['password']);
                    header("Location:index1.php");
                }
                else
                    header("Location:index.php");
                
                
            }           
        }
        ?>
    </body>
</html>
