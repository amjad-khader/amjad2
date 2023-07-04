<?php 
include '../../connect.php';
$id = $_POST['id'];
$delete = "DELETE FROM section1 WHERE id = $id";
$connect -> query($delete);
header('location:../section1.php');