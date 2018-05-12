<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "connection.php";
        $msg="";
        if(isset($_POST['submit']))
        {
            $target="./images/".basename($_FILES['image']['name']);
            $sql="INSERT INTO produse (product_name,description,image,price) VALUES ('{$_POST["numeprodus"]}',"
            . "'{$_POST["description"]}','$target','{$_POST["price"]}')";
            $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        
            if($_POST["selectie"]=="lichide")
            {
            $sql="INSERT INTO lichide (product_name,description,image,price) VALUES ('{$_POST["numeprodus"]}',"
            . "'{$_POST["description"]}','$target','{$_POST["price"]}')";
            $query=mysqli_query($con,$sql)or die(mysqli_error($con));
            }
            if($_POST["selectie"]=="atomizoare")
            {
            $sql="INSERT INTO atomizoare (product_name,description,image,price) VALUES ('{$_POST["numeprodus"]}',"
            . "'{$_POST["description"]}','$target','{$_POST["price"]}')";
            $query=mysqli_query($con,$sql)or die(mysqli_error($con));
            }
            if($_POST["selectie"]=="baterii")
            {
            $sql="INSERT INTO baterii (product_name,description,image,price) VALUES ('{$_POST["numeprodus"]}',"
            . "'{$_POST["description"]}','$target','{$_POST["price"]}')";
            $query=mysqli_query($con,$sql)or die(mysqli_error($con));
            }
            if($_POST["selectie"]=="kituri")
            {
            $sql="INSERT INTO kituri (product_name,description,image,price) VALUES ('{$_POST["numeprodus"]}',"
            . "'{$_POST["description"]}','$target','{$_POST["price"]}')";
            $query=mysqli_query($con,$sql)or die(mysqli_error($con));
            }
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
            {
                header('Location:admin.php');
            }else
            {
                $msg="Vai! Vai! Vai!!!";
            }
        }

        ?>
    </body>
</html>
