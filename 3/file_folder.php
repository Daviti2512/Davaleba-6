<div class="test">
<?php
    if(isset($_POST['folder'])){
        $n_folder = $_POST['folder'];
        mkdir("MyDrive/".$n_folder);
    }

    if(isset($_POST['file'])){
        $n_file = $_POST['file'];
        fopen("MyDrive/".$n_file.".txt", "w");
    }

    if(isset($_POST['new_name'])){
        $new_name = $_POST['new_name'];
        $old_name = $_POST['old_name'];
        if(!is_file("MyDrive/".$old_name)){
            if(!is_dir("MyDrive/".$new_name)){
                rename("MyDrive/".$old_name, "MyDrive/".$new_name);
            }else{
                echo "<script>alert('The folder exists.')</script>";
            }
        }else{
            if(!file_exists("MyDrive/".$new_name)){
                rename("MyDrive/".$old_name, "MyDrive/".$new_name.".txt");
            }else{
                echo "<script>alert('The File exists.')</script>";
            }
        }
    }

    if(isset($_GET['source'])){
        $source = "MyDrive/".$_GET['source'];
        // echo $source;
        if(is_file($source)){
            unlink($source);
        }else{
                rmdir($source);
        }
    }

    if(isset($_POST["up_file"])){
        $up_file = $_POST["up_file"];
        $file = $_FILES["uploaded_file"];
        $new_source = "MyDrive/".$file["name"];
        echo "<pre>";
        print_r($file);
        echo "</pre>";
        move_uploaded_file($file["tmp_name"], $new_source);
    }


    $scan = scandir("MyDrive");

    

    // echo "<pre>";
    // print_r($scan);
    // echo "</pre>";
?>
</div>
