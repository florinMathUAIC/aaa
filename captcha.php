<!DOCTYPE html>
<?php include 'class_validare.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(isset($_POST['register']))  ?>
        <?php if(Validare::valid(new Validare($_POST["username"],$_POST["email"]))) { ?>
        <form method="post" action="validare_captcha.php" align="center">       
            <?php echo $_POST['nr1']."+".$_POST['nr2']."=" ; ?>
            <input type="hidden" name="corect" value="<?php echo $_POST['corect'] ?>">
            <input type="hidden" name="username" value="<?php echo $_POST['username'] ?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
            <input type="hidden" name="password" value="<?php echo md5($_POST['password']) ?>">
            <input type="text" name="rezultat" size="1">
            <input type="submit" name="submit">
        </form>
        <?php } else 
            { echo 'Username or e-mail already in use.<br>';
              echo "<a href='inregistrare.php'>Try again</a>";
            }
            ?>
    </body>
</html>
