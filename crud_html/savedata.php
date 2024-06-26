<?php
include 'connection.php';
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['class'];
$sphone = $_POST['sphone'];
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$sname}','{$saddress}','{$sclass}','{$sphone}')";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
header("location: index.php");
mysqli_close($conn);
