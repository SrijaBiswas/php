<?php
    if(isset($_POST['submit'])){
        $allowed = array('png','jpg','jpeg', 'gif');
        if (!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $tar = "upload/$(file_name)";
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            $file_ext = explode('.',$file_name);
            $file_ext = strtolower(end($file_ext));
            //echo $file_ext;
            if (in_array($file_ext,$allowed)) {
                if ($file_size<=1000000) {
                    move_uploaded_file($file_tmp,$tar);
                    $msg = '<p style="color: green;">File uploaded.</p>';

                } else {
                    $msg = '<p style="color: red;">File is too large.</p>';
                }
                
            } else {
                $msg = '<p style="color: red;">Invalid file type.</p>';
            }          
        }
        else{
            $msg = '<p style="color: red;">Please chose a file.</p>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $msg ?? null;?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload" id="">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>