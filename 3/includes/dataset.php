<table class="dataset">
    <tr>
        <th>Name</th>
        <th>Rename</th>
        <th>Delete</th>
        <th>Download</th>
    </tr>
    <?php
        for($i=2; $i<count($scan); $i++){
    ?>
    <tr>
        <td class="<?=is_file("MyDrive/".$scan[$i])?"file":"folder"?>"> 
                <?php
                if(is_file("MyDrive/".$scan[$i])){
                    echo "<a href='?file_view=$scan[$i]'>$scan[$i]</a>";
                }else{
                    echo $scan[$i];
                }
                ?> 
        </td>
        <td style="width:25%">
            <form action="" method="post">
                <input type="text" plcaeholder="rename" name="new_name">
                <input type="hidden" name="old_name" value="<?=$scan[$i]?>">
                <button>Rename</button>
            </form>
        </td>
        <td>
            <a href="?source=<?=$scan[$i]?>">delete</a>
        </td>       
        <td>
            <a href="<?="MyDrive/".$scan[$i]?>" download><?=is_file("MyDrive/".$scan[$i])?"download":""?></a>
        </td>
    </tr>
    <?php } ?>
</table>
