<?php
   // Đọc file
    $file = fopen("note.txt","r");
    
    //
    while (!feof($file)){
        $nddong = fgets($file);
        echo $nddong . "<br>";
    }
?>