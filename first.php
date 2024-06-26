<?php
    /*echo 'hello 14224';
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';*/
    //echo $_GET['name'];
    //echo $_GET['age'];
    //if(isset($_POST['submit'])){
       // echo $_POST['name'];
       // echo $_POST['age'];
    //}
?>
<!--<a href="<?php //echo $_SERVER['PHP_SELF'];?>?name=Srija&age=23">Click</a>
<form action="<?php //echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>-->

<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<h1> Welcome '.$_SESSION['username'].'</h1>';
    echo '<a href="logout.php">Logout</a>';
}else{
    echo '<h1>Welcome !!!!!!!</h1>';
    echo '<a href="cookie.php">Home</a>';
}
?>

<?php
    if(isset($_POST['submit'])){
        //$name = htmlspecialchars($_POST['name']);
        //$name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
        //$age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_var($_POST['name']);
        echo $name;
    }?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" id="">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>