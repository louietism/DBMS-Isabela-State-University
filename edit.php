<?php
session_start();
if (!isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';
$ID = $_GET['ID'];

$sql = "Select * from tbl_students where id = $ID";
$result = mysqli_query($conn, $sql);

if($result){
    $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
</head>
<style>
    body{
        background: whitesmoke;
    }
    h1{
        background: #2e8b57;
        length: 20px;
        padding: 10px;
        color: white;
    }
</style>
<body>
    
<h1><font face = "Tahoma"><img src="isulogo.png" width="40px"> Update Student Data | MACARIAS</h1>- <b>M</b>anagement <b>A</b>utomation for <b>C</b>omprehensive <b>A</b>dministration and <b>R</b>egistration of <b>I</b>nstitutional <b>A</b>cademic <b>S</b>tudent Data</font>
    <font face = "arial" size='3' color='white'  ><marquee bgcolor="green" length="1080" width="100%">
    MACARIAS - Management Automation for Comprehensive Administration and Registration of Institutional Academic Student Data | Isabela State Univesity Roxas, Campus |
        Features | SATS - Smart Attendance Tracking System | AR Technology Virtual Learning | Vitrual Assictance Advance Help-Guide Course Adaptation | 
        QR Code-based Enrollment | SY: 2023-2024
    </marquee></font>
    <p> <font face='arial' size='2' >
    <a href="retrieve.php">View List</a>
    <a href=""> | Course</a>
    <a href=""> | Personal Info</a>
    <a href=""> | Grades</a>
    <a href=""> | Enrollment Form</a>
    <a href="logout.php">Log Out</a>
    </font>
    <form action="update.php" method="post">
        <p><img src= <?php echo $row['image_path']; ?> alt="Student image" style="width: 150px" border-radius: 50%;></p>
        <p><input type="text" placeholder="ID" name="id" value=<?= $row['id']; ?> readonly ></p>
        <p><input type="text" placeholder="ID number" name="idnumber" value="<?= $row['student_id']; ?>"></p>
        <p><input type="text" placeholder="First Name" name="fn" value="<?= $row['first_name']; ?>"></p>
        <p><input type="text" placeholder="Middle Name" name="mn" value="<?= $row['middle_name']; ?>"></p>
        <p><input type="text" placeholder="Last Name" name="ln" value="<?= $row['last_name']; ?>"></p>
        <p><input type="text" placeholder="Email" name="email" value="<?= $row['email']; ?>"></p>
        <p><input type="text" placeholder="Mobile Number" name="mobile" value="<?= $row['mobile']; ?>"></p>
        <p><input type="text" placeholder="Address" name="address" value="<?= $row['address']; ?>"></p>
        <p><input type="text" placeholder="Password" name="password" value="<?= $row['password']; ?>"></p>
        <p><input type="file" name="image" accept="image/*" value="<?= $row['image_path']; ?>"></p>
        <input type="submit">


    </form>
</body>
</html>