<?php   
include '../../connect.php';
$id = $_POST['id'];
$h31 = $_POST['h31'];
$span = $_POST['span'];
$h2 = $_POST['h2'];
$h32 = $_POST['h32'];
$button = $_POST['button'];


$update = "UPDATE section1 SET h31 = '$h31', span = '$span',h2 = '$h2',h32 = '$h32',button = '$button' where id = $id ";
$connect -> query($update);
header("location:../section1.php");




?>