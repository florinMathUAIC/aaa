<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/imagini.css" rel="stylesheet">
    </head>
    <body>
        <?php
        //include connection file
        include 'connection.php';
        $sql="SELECT * FROM produse WHERE ID='{$_GET['id']}'";
        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        $row=mysqli_fetch_array($query);
        echo"Denumire produs:".$row["product_name"]."<br>";
        echo"descriere:".$row["description"]."<br>";
        ?>
        <a targe="_blank" href="<?php echo $row['image']; ?>"><img src="<?php echo $row['image']; ?>" id="view_img"><a></a><br>
        <?php
        echo"Pret: ".$row["price"]." lei<br>";
        ?>
        <a href="admin.php">Back</a>
        
        
    </body>
</html>
