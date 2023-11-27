<?php
session_start();
if (!isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';

$ID = $_GET['ID'];

$sql = "delete from tbl_students where id = $ID";
$result = mysqli_query($conn, $sql);
if($result){
    header('location:retrieve.php');
}

?>