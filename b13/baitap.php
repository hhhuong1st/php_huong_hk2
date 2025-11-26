<?php
    
    $file = fopen("file2.txt","a");

    // "w" ghi đè
    // "a" ghi thêm giữ cũ
    
    //
    $ndghi = " vào thứ tư";
    
    $slghi = fwrite ($file, $ndghi);
    $kq = file_exists("file2.txt");
    if($kq){
        echo "File tồn tại";
    }
    else {
        echo "File không tồn tại";
    }
?>