<?php
    if(isset($_POST['file_content'])){
        $file_content = $_POST['file_content'];
        echo $file_content;
        file_put_contents("MyDrive/" . $_GET['file_view'], $file_content); 
    }
?>
<h2>
    <?=$_GET['file_view']?>
</h2>
<form method="post">
    <textarea name="file_content" class="f_view_text_area"><?php echo file_get_contents("MyDrive/" . $_GET['file_view']);?></textarea>
    <p><input type="submit" value="UPDATE"></p>
</form>
