<?php
   // Đọc file
    $file = fopen("note.txt","r");
    
    //
    $nd = file_get_contents("note.txt");
    echo $nd;
    
    // Đóng file
    fclose ($file)
?>