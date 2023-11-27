<?php
session_start();
if (isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';

?>
<style>
    h1 {
    font-family: sans-serif;
    font-size: 24px;
    background: #2e8b57;
    color: white;

    }

    body {
    background-color: whitesmoke;
    font-family: Arial, helvetica, sans-serif;
    }
    a{
        background-color: whitesmoke;
    font-family: Arial, helvetica, sans-serif
    }
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign Up | Student Registration System</title>
</head>

<body>

<h1><font face = "Tahoma"><img src="isulogo.png" width="50px"> Student Registration Data | MACARIAS</h1> - <b>M</b>anagement <b>A</b>utomation for <b>C</b>omprehensive <b>A</b>dministration and <b>R</b>egistration of <b>I</b>nstitutional <b>A</b>cademic <b>S</b>tudent Data</font>
    <font face = "arial" size='3' color='white'  ><marquee bgcolor="green" length="1080" width="100%">
    MACARIAS - Management Automation for Comprehensive Administration and Registration of Institutional Academic Student Data | Isabela State Univesity Roxas, Campus |
        Features | SATS - Smart Attendance Tracking System | AR Technology Virtual Learning | Vitrual Assictance Advance Help-Guide Course Adaptation | 
        QR Code-based Enrollment | SY: 2023-2024
    </marquee>
    <font face= 'arial'>
    <form action="create.php" method="get">
    <p><input type="text" placeholder="ID number" name="idnumber"></p>
    <p><input type="text" placeholder="First Name" name="fn"></p>
    <p><input type="text" placeholder="Middle Name" name="mn"></p>
    <p><input type="text" placeholder="Last Name" name="ln"></p>
    <p><input type="text" placeholder="Email" name="email"></p>
    <p><input type="text" placeholder="Mobile Number" name="mobile"></p>
    <p><input type="text" placeholder="Address" name="address"></p>
    <p><input type="password" placeholder="Password" name="password"></p>
    <input type="submit"><p>
    </form></font>

    <a href="login.php">Go Back</a>
</body>
</html>