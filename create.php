<?php
session_start();
if (!isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';
//var_dump($_POST['idnumber]);
$idnumber = $_POST['idnumber'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ln = $_POST['ln'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$password = $_POST['password'];

$targetDirectory = "images/";
$targetFileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDirectory . $targetFileName;
$imageFiletype = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){

$sql= "INSERT INTO
tbl_students(student_id,first_name,middle_name,last_name,email,mobile,address,password,image_path)
value ($idnumber,'$fn','$mn','$ln','$email','$mobile','$address','$password', '$targetFilePath' )";
//it will execute the query on the variable $sql
$result = mysqli_query($conn,$sql); // this code will run in sql query

//check if there is an error or not kimi
if($result){
    header('location:retrieve.php');
    }else{
    die(mysqli_error($conn));
    }
}else {
    echo "Error uploading image...";
}
?>
<a href="index.php"> Go Back </a>