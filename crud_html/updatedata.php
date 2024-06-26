<?php
include 'connection.php';
$sid = $_POST['sid'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];
$sql = "UPDATE student SET sname='{$sname}', saddress='{$saddress}', sclass='{$sclass}', sphone='{$sphone}' WHERE sid ={$sid}";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
header("location: index.php");
mysqli_close($conn);
