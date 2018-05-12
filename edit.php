<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
      include 'connection.php';
      if(!isset($_POST["submit"]))
      {
          $sql="SELECT FROM * produse WHERE id='{$_GET['id']}'";
          $result=mysqli_query($con,$sql);
          $record= mysqli_fetch_array($result);
      }else
      {
          $target="./images/".basename($_FILES['image']['name']);
          $sql1="UPDATE produse SET product_name='{$_POST['denumire_produs']}',description='{$_POST['descriere']}',image='$target',price='{$_POST['pret']}' WHERE id='{$_POST['id']}'";
          mysqli_query($con, $sql1)or die($mysqli_error($con));
          if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
          header('Location:admin.php');
      }
    ?>
        <h1>Editati inregistrarea:</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            Nume:<br><input type="text" name="denumire_produs" value="<?php echo $record['product_name'];?>"/><br>
            Descriere:<br><input type="text" name="descriere" value="<?php echo $record['description'];?>"/><br>
            Imagine:<br><input type="file" name="image" value="<?php echo $record['image'];?>"/><br>
            Pret:<br><input type="text" name="pret" value="<?php echo $record['price'];?>"/><br>
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
            <input type="submit" name="submit" value="Edit"/>
        </form>
        <br><br>
        <a href="admin.php">Back</a>
    </body>
</html>
