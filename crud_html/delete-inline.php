<?php
$std1 = $_GET['id'];
include 'connection.php';
$sql = "DELETE FROM student WHERE sid={$std1} ";
$result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
header("location: index.php");
mysqli_close($conn);
