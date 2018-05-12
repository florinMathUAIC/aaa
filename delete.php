<?php

include 'connection.php';
$sql="DELETE FROM produse WHERE ID='{$_GET['id']}'";
mysqli_query($con,$sql)or die(mysqli_error($con));
header('Location:admin.php');
?>

