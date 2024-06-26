<?php
$file = 'username1.txt';
//$file = 'username1.txt';
if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
} else {
    $handle = fopen($file, 'w');
    $content = 'Biswajit' . PHP_EOL . 'Avijit' . PHP_EOL . 'Chandan';
    fwrite($handle, $content);
    fclose($handle);
}
