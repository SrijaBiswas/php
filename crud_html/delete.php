<?php include 'header.php';
if (isset($_POST['deletebtn'])) {
    $std1 = $_POST['sid'];
    include 'connection.php';
    $sql = "DELETE FROM student WHERE sid={$std1} ";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
    header("location: index.php");
    mysqli_close($conn);
}?>
<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
