<?php
   // Đọc file
    $file = fopen("note.txt","a");
    
    $kq = unlink("note1.txt");
    if($kq){
        echo "Xoá thành công";
    }
    else {
        echo "Xoá thất bại";
    }
   
    

    // 
    fclose ($file)
?>