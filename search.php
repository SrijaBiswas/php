<?php
$servername = "localhost"; // Change this to your MySQL server hostname if it's different
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "php_dev"; // Change this to your MySQL database name
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} //else {
// echo "Connected successfully";
//}
//$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <form action="" method="POST">
            <input type="text" placeholder="Search Item" name="search">
            <button class="btn btn-dark btn-sm" name="submit">Search</button>
            <div class="container my-5">
                <table class="table">
                    <?php
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    //$sql = "SELECT * FROM `user` WHERE id='$search' or fname='$search' or lname='$search'";
    $sql = "SELECT * FROM `user` WHERE id LIKE '%$search%' or fname LIKE '%$search%' or lname LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        //$num = mysqli_num_rows($result);
        //echo $num;
        if (mysqli_num_rows($result) > 0) {
            echo '<thead>
            <tr>
            <th>Sl no</th>
            <th>First Name</th>
            <th>Last Name</th>
            </tr>
            </thead>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tbody>
            <tr>
            <td>' . $row['id'] . '</td>
            <td>' . $row['fname'] . '</td>
            <td>' . $row['lname'] . '</td>
            </tr>';
            }
            echo '</tbody>';
        } else {
            echo '<h2 class="text-danger">Data Not Found</h2>';
        }
    }
}
?></table>
            </div>
        </form>
    </div>
</body>
</html>
