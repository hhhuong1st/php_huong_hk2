<?php
    $toan = 8;
    $ly = 8;
    $hoa = 8;
    $dtb = (($toan + $ly + $hoa) / 3);
    echo "Cho: toán = $toan, lý = $ly, hoá = $hoa <hr>";
    echo "Điểm trung bình là: $dtb <br>";

    if ($dtb < 5){
        echo "Kết quả là: Yếu ";
    }
    elseif ($dtb <= 5 && $dtb < 7){
        echo "Kết quả là: Trung bình";
    }
    elseif ($dtb <= 7 && $dtb < 8){
        echo "Kết quả là: Khá";
    }
    else{
        echo "Kết quả là: Giỏi";
    }
?>