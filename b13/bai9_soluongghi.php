<?php
   // Đọc file
    $file = fopen("note.txt","a");

    // "w" ghi đè
    // "a" ghi thêm giữ cũ
    
    //
    $ndghi = "Nơi sinh: CM";
    
    $slghi = file_get_contents("note.txt", FILE_APPEND);

    if($slghi>0){
        echo "Ghi nội dung thành công"; 
        echo "<br> Số lượng ghi: $slghi byte";
    }
    else{
        echo "Ghi nội dung thất bại";
    }
    
   
    

    // 
    fclose ($file)
?>