<?php
    function inverse($x){
        if (!$x) {
            throw new Exception('Division by zero');
        }
        return 1/$x;
    }
    //echo inverse(0);
    try {
        echo inverse(5);
        echo inverse(0);
    } catch (Exception $e) {
        echo 'Caught Exception',$e->getMessage(),' ';
    } finally{
        echo 'First Finally';
    }
    echo 'Hello World';
?>