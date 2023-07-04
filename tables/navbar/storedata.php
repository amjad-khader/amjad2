<?php 
include '../../connect.php';
// $li = 'ccc';
$li = $_POST['li'];

//INSERT INTO navbar (li) VALUES ('ccc') 
$query = "INSERT INTO navbar (li) VALUES ('$li')";
$connect -> query($query);
header('location:../navbar.php');
?>