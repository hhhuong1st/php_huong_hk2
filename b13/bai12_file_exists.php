<?php
    
    $kq = file_exists("note.txt");
    if($kq){
        echo "File tồn tại";
    }
    else {
        echo "File không tồn tại";
    }
  
?>