<?php
    $s1 = "laptrinh";
    echo "Chuỗi 1 là: " .$s1;
    
    //mã hoá md5
    $mahoa_md5 = md5($s1);
    echo "<br> Chuỗi 1 mã hoá md5 là: " . $mahoa_md5;

    // mã hoá sha1
    $mahoa_sha1 = sha1($s1);
    echo "<br> Chuỗi 1 mã hoá sha1 là: " . $mahoa_sha1;

    // mã hoá base64_encode
    $mahoa_base64 = base64_encode($s1);
    echo "<br> Chuỗi 1 mã hoá base64_encode là: " . $mahoa_base64;

    //giải mã base64
    $giaima_base64 = base64_decode($mahoa_base64);
    echo "<hr> Chuỗi 1 giải mã base64_encode là: " . $giaima_base64;
?>