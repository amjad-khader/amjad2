<?php   
include '../../connect.php';
$id = $_POST['id'];
$li = $_POST['li'];


$update = "UPDATE navbar SET li = '$li' where id = $id ";
$connect -> query($update);
header("location:../navbar.php");




?>