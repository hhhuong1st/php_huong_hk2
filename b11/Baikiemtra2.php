<?php
    $s1 = "tinhocCOBAN";
    $s2 = "Hoc";

    // a) s1 -> chữ thường, s2 -> chữ hoa
    $s1_thuong = strtolower($s1);
    $s2_hoa = strtoupper($s2);

    echo "a) s1 = $s1_thuong<br>";
    echo "   s2 = $s2_hoa<br><br>";

    // b) Đếm ký tự
    $so_kt_s1 = strlen($s1);
    $so_kt_s2 = strlen($s2);

    echo "b) Số ký tự s1: $so_kt_s1<br>";
    echo "   Số ký tự s2: $so_kt_s2<br><br>";

    // c) Tìm chuỗi s2 trong s1
    if(strpos(strtolower($s1), strtolower($s2)) !== false){
        echo "c) Tìm thấy chuỗi s2 trong s1<br><br>";
    }else{
        echo "c) Không tìm thấy<br><br>";
    }

    // d) Thay thế "coban" -> "nangcao" trong s1
    $s1_thay = str_ireplace("coban", "nangcao", $s1_thuong);
    echo "d) Chuỗi sau khi thay thế: $s1_thay<br><br>";

    // e) Lặp s2 hai lần -> s3
    $s3 = $s2 . $s2;
    echo "e) s3 = $s3<br><br>";

    // f) Mã hóa và giải mã s3
    $mahoa = base64_encode($s3);
    $giaima = base64_decode($mahoa);

    echo "f) Chuỗi s3 mã hóa: $mahoa<br>";
    echo "   Chuỗi giải mã: $giaima<br>";
?>