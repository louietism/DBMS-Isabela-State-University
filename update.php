<?php 
session_start();
if (!isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';
$ID = $_POST['id'];
$idnumber = $_POST['idnumber'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ln = $_POST['ln'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$password = $_POST['password'];
$targetFilePath = $_POST['image_path'];

$sql = "Update tbl_students set student_id = $idnumber,
first_name = '$fn',
middle_name = '$mn',
last_name = '$mn',
email = '$email',
mobile = '$mobile',
address = '$address',
password = '$password',
image_path = '$targetFilePath'
WHERE id = $ID";


$result = mysqli_query($conn,$sql);
if ($result){
    header('location: retrieve.php');
}else{ 
    die(mysqli_error($conn));
    }
?>