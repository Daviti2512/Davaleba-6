<?php
include "file_upload.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>task 2</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button name="upload_bt">Upload</button>
    </form>
    <table>
        <tr>
            <td>file name</td>
            <td>downolad</td>
            <td>delete</td>
        </tr>      
            <?php 
            for($i = 2; $i < count($file_dir); $i++){
            ?>
        <tr>
            <td><?=$file_dir[$i];?></td>
            <td><a href="<?=$file_dir[$i];?>" download>Download</a></td>
            <td><button><a href="?delete_file=<?= $file_dir[$i];?>">Delete</a></button></td>
        </tr>
            <?php 
            }
            ?>
    </table>
</body>

</html>
