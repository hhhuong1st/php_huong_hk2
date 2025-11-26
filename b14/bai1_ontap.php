<?php
    // $kq = copy("vd1.txt","vd2.txt");
    // if($kq){
    //     echo "Sao chép thành công";
    // }
    // else {
    //     echo "Sao chép thất bại";
    // }

    $file = fopen("vd2.txt","a");

    $ndghi = " học bài php";
    
    $slghi = fwrite ($file, $ndghi);
    $kq = file_exists("vd2.txt");
    if($kq){
        echo "File tồn tại";
    }
    else {
        echo "File không tồn tại";
    }
   
?>