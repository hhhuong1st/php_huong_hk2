<?php
    //Nhóm hàm về số

    //Hàm về trị tuyệt đối
    $a = -2;
    echo "Số ban đầu là: $a";
    echo "<br> Trị tuyệt đối của a là: " . abs($a);

    
    //Hàm max, hàm min
    $b = 5;
    $c =-6;
    $d= 2;
    echo "<hr> Cho b=$b, c=$c, d=$d";
    echo "<br> Số lớn nhất trong 3 số b, c, d là: " . max($b, $c, $d);
    echo "<br> Số lớn nhất trong 3 số b, c, d là: " . min($b, $c, $d);


    //Hàm lấy căn hai
    $e =9;
    echo "<hr> Cho e=$e ";
    echo "<br>Căn bậc 2 của $e là: " .sqrt($e);

    //Hàm luỹ thừa
    $coso =3;
    $somu =2;
    echo " <hr> $coso <sup> $somu </sup> là: " .pow($coso, $somu);

    //Làm tròn
    $so =54.53654;
    echo "<hr> Cho số l: $so";
    echo "<br> Số được làm tròn 2 số lẽ là: " . round($so,2);

    //Tạo số ngẫu nhiên
    $a = 1;
    $b = 10;
    echo "<hr> Số ngẫu nhiên từ 0 đến 10 là: " . rand($a, $b);
?>