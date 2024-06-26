<?php
    /*setcookie('name', 'Srija', time()+86400*30);
    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }
    setcookie('name','', time()-86400);*/
    session_start();
    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        //$name = filter_var($_POST['name']);
        //echo $name;
        if ($username=='Srija' && $password=='password') {
            $_SESSION['username']=$username;
            header('location:first.php');
        }else{
            echo 'Incorrect login';
        }
    }
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" id="">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
