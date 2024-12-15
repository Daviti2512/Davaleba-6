<?php
    include "file_folder.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lercture 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="controls">
            <div class="row">
                <a href="index.php">HOME</a>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" placeholder="name" name="folder"> <button>Create Folder</button>
                </form>
            </div>
            <div class="row">
                <form action="" method="post">
                    <input type="text" placeholder="name" name="file"> <button>Create File</button>
                </form>
            </div>
            <div class="row">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" placeholder="name" name="uploaded_file"> 
                    <button name="up_file">Upload File</button>
                </form>
            </div>
        </div>
        <div class="content">
            <?php
                if(isset($_GET['file_view'])){
                    include "includes/f_view.php";
                }else{
                    include "includes/dataset.php";
                }
            ?>
        </div>
    </div>
</body>
</html>
