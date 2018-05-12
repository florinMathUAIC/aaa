<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        if($_SESSION["username"]!="admin")
            header('Location:logout.php');
        ?>
        <a href="index1.php">Back to the website</a><br>
        <table>
            <tr>        
               <!--adaugare produs nou-->
               <th><h4><font color="red">Adaugare produs</font></h4></th>
               <!-- lista produse-->
               <th><h4><font color="red">Lista produse</font></h4></th>
            </tr>
            
        <form method="post" action="save.php" enctype="multipart/form-data">
            <table>
                <tr><td>Product Name</td> <td><input type="text" name="numeprodus"></td></tr>
                <tr><td>Description</td> <td> <textarea row="40" cols="20" name="description"></textarea></td></tr>
                <tr><td>Image</td><td><input type="hidden" name="size" value="10000000">
                <div>
                    <input type="file" name="image">
                </div></td></tr> 
                <tr><td>Price</td><td><input type="text" name="price"></td></tr>
                <tr><td>Category</td><td> <select name="selectie" size="1">
                            <option name="lichide">lichide</option>
                            <option name="atomizoare">atomizoare</option>
                            <option name="baterii">baterii</option>
                            <option name="kituri">kituri</option>
                                 </select> 
                </td></tr> 
                <tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
            </table>        
        </form>
        
        
        <?php
        include 'connection.php';
        $sql='SELECT * FROM produse ORDER BY product_name ASC';
        if(isset($_POST["search"]))
        {
            $sql='SELECT * FROM produse ';
            $search_term= mysqli_real_escape_string($con,$_POST["search_box"]);
            $sql.="WHERE product_name='{$search_term}'";
        }
        if(isset($_POST["reset"]))
            $sql='SELECT * FROM produse ORDER BY product_name ASC';

        $query=mysqli_query($con,$sql)or die(mysqli_error($con));
        ?>
            <td>    
        <table width="70" cellpadding="4" cellspace="4">
            <tr> 
            <form name="search_form" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            Search: <input type="text" name="search_box" value=""/>
            <input type="submit" name="search" value="Search the table">
            <input type="submit" name="reset" value="Reset"/>
            </form>
            </tr>
            <tr>
                <th>Nume_______produs</th>
                <th>Descriere</th>
                <th>Pret</th>
                <td colspan="3" align="center"><strong>Actions</strong></td>
            </tr>
            <?php while($row=mysqli_fetch_array($query))
            {?>
            <tr>
                <td><?php echo $row["product_name"];?></td>
                <td><?php //echo $row["description"];?></td>
                <td><?php echo $row["price"];?></td>
                <td><?php echo"<a href=\"view.php?id=".$row['id']."\">View</a>"?></td>
                <td>  <?php echo"<a href=\"edit.php?id=".$row['id']."\">Edit</a>"?>
                <td>   <?php echo"<a href=\"delete.php?id=".$row['id']."\"onclick=\"return confirm('Are you sure?')\">Delete</a>" ?>
                </td>
            </tr>
            <?php } ?>
        </td></tr>
        </table>   
            </td>
    </body>
</html>
