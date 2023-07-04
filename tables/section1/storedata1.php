<?php 
include '../../connect.php';
$id = $_POST['id'];
$h31 = $_POST['h31'];
$span = $_POST['span'];
$h2 = $_POST['h2'];
$h32 = $_POST['h32'];
$button = $_POST['button'];


$query = "INSERT INTO section1 (h31,span,h2,h32,button) VALUES ('$h31','$span','$h2','$h32','$button')";
$connect -> query($query);
header('location:../section1.php');
?>