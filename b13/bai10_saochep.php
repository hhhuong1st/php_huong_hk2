<?php
//    // Đọc file
//     $file = fopen("note.txt","a");

    // "w" ghi đè
    // "a" ghi thêm giữ cũ
    
    $kq = copy("note.txt","note1.txt");
    if($kq){
        echo "Sao chép thành công";
    }
    else {
        echo "Sao chép thất bại";
    }
   
    

    // // 
    // fclose ($file)
?>