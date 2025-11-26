<?php
    $file = fopen("note.txt","r");
    if ($file) {
        echo "File mở thành công";
    } 
    else {
        echo "File mở thất bại";
    }

    
?>