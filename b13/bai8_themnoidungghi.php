<?php
   // Đọc file
    $file = fopen("note.txt","a");

    // "w" ghi đè
    // "a" ghi thêm giữ cũ
    
    //
    $ndghi = "MSSV: 2430140006";
    
    $slghi = fwrite ($file, $ndghi);

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