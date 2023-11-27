<?php

session_start();
if (!isset($_SESSION['user_email'])) {
header("Location: login.php");
}

include 'connect.php';
$sql = "SELECT * FROM tbl_students";
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){
    $keyword = $_POST['search'];
    $sql = "SELECT * FROM tbl_students WHERE last_name like '%$keyword%' or first_name like '%$keyword%' or middle_name like '%$keyword%' or address like '%$keyword%'
     or email like '%$keyword%' or mobile like '%$keyword%' or student_id like '%$keyword%' or id like '%$keyword%'";
    $result = mysqli_query($conn,$sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table Data</title>
    <style>
        body{
            background: whitesmoke;
        }
        tr{
            background-color: whitesmoke;
            display: relative;
            margin-left; 80%;

        }
        h1{
            margin-top: 10px;
            margin-bottom: 1px;
            margin-left: 5px;
            background: #2e8b57;
            color: white;
        }
        th{
            background-color: #006400;
            color: white;

        }
        tr{
            background-color: whitesmoke;
            background-color: white;
        }
        .search{
            margin-top: 2px;
            margin: 2px;
            margin-left: 1500px;
        }
        tbody{
            text-align: center;
        }
    </style>
</head>
<body>

    <h1><font face = "Tahoma"><img src="isulogo.png" width= "50px"> Student List | MACARIAS <img src="colleges.png" width="200px"></h1> - <b>M</b>anagement <b>A</b>utomation for <b>C</b>omprehensive <b>A</b>dministration and <b>R</b>egistration of <b>I</b>nstitutional <b>A</b>cademic <b>S</b>tudent Data</font>
    <font face = "arial" size='3' color='white'  ><marquee bgcolor="green" length="1080" width="100%">
    MACARIAS - Management Automation for Comprehensive Administration and Registration of Institutional Academic Student Data | Isabela State Univesity Roxas, Campus |
        Features | SATS - Smart Attendance Tracking System | AR Technology Virtual Learning | Vitrual Assictance Advance Help-Guide Course Adaptation | 
        QR Code-based Enrollment | SY: 2023-2024 
    </marquee></font>
    <p> <font face='arial' size='2' >
    <center>
    <a href="index.php">Add Student</a>
    <a href=""> | Course</a>
    <a href=""> | Personal Info</a>
    <a href=""> | Grades</a>
    <a href=""> | Enrollment Form</a>
    <a href="logout.php">| Log Out</a>
    
    <form method="post">
    <input class="search" type="text" placeholder="Search" name="search">
    <input type="submit" name="submit" value="🔍">
    <a href="">| Refresh</a><p></p>
    </form>
    </font></center>
    <p></p>
    <font face= 'arial'>
    <table border="1" cellspacing="0" width="100%">
        <thead>
            <th>#</th>
            <th>STUDENT ID</th>
            <th>FIRST NAME</th>
            <th>MIDDLE NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>MOBILE</th>
            <th>ADDRESS</th>
            <th>IMAGE</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '
                    <tr>
                    <td>'. $row['id'] .'</td>
                    <td>'. $row['student_id'] .'</td>
                    <td>'. $row['first_name'] .'</td>
                    <td>'. $row['middle_name'] .'</td>
                    <td>'. $row['last_name'] .'</td>
                    <td>'. $row['email'] .'</td>
                    <td>'. $row['mobile'] .'</td>
                    <td>'. $row['address'] .'</td>
                    <td><img src=' .$row['image_path'].' style=" width: 100px; "></td>
                    <td><a href="edit.php?ID='.$row['id'].'"> Update</a> |
                    <a href="delete.php?ID= ' .$row['id'].'">Delete</a></td>
                    </tr>                    
                    ';
                }
            } else {
                echo "Walang Laman" ;
            }
            ?>   
        </tbody></font>
    </table>                    
</body>

</html>

