<?php
    //Cách 1
    echo "MSSSV: 1930020011";
    echo "<br>Họ tên: Nguyễn Văn An";
    echo "<br>Lớp: 20CDTH01";

    //Cách 2 
    echo "<hr>MSSSV: 1930020011 
        <br>Họ tên: Nguyễn Văn An 
        <br>Lớp: 20CDTH01";
    
    //Cách 3
    $ms = "1930020011";
    $ht = "Nguyễn Văn An";
    $lop = "20CDTH01";
    echo "<hr>MSSV: $ms";
    echo "<br>Họ tên: $ht";
    echo "<br>Lớp: $lop";
?>