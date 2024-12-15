<?php 

if(isset($_POST["upload_bt"])){
    $upload_file = $_POST["upload_bt"];
    $file = $_FILES["file"];
    $new_source = "Upload/". $file["name"];

    $max_size = 50 * 1024 * 1024;

    if($_FILES["file"]["size"] < $max_size){
        move_uploaded_file($file["tmp_name"], $new_source);
    }else{
        echo "max size is " + $max_size;
    }
}


if(isset($_GET['delete_file'])){
    $file_to_delete = "Upload/" . $_GET['delete_file'];

    if(file_exists($file_to_delete)){
        unlink($file_to_delete);  
        echo "File deleted";
    }
}
$file_dir = scandir("Upload");

?>
