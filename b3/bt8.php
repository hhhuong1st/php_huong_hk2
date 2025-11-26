<?php
    $M = 3;
    $N = $M + 2;
    //Hiển thị giá trị ban đầu
    echo "Cho M là: $M";
    echo "<br>Tính N là: $N";
    //Kiêm tra N chẳn hay lẻ
    $kq = ($N % 2 == 0) ? "số chẳn" : "số lẻ";
    echo "<br>Kết quả N là: $kq";
?>