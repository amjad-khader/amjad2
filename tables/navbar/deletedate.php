<?php 
include '../../connect.php';
$id = $_POST['id'];
$delete = "DELETE FROM navbar WHERE id = $id";
$connect -> query($delete);
header('location:../navbar.php');