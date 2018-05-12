<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="save.php" enctype="multipart/form-data">
            <table>
                <tr><td>Product Name</td> <td><input type="text" name="numeprodus"></td></tr>
                <tr><td>Description</td> <td> <textarea row="40" cols="20" name="description"></textarea></td></tr>
                <tr><td>Image</td><td><input type="hidden" name="size" value="10000000">
                <div>
                    <input type="file" name="image">
                </div></td></tr> 
                <tr><td>Price</td><td><input type="text" name="price"></td></tr>
                <tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
            </table>
        </form>     
        <?php
        ?>
    </body>
</html>
