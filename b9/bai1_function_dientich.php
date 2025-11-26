<?php
    //Xây dựng tính chu vi
    function chuvi($dai,$rong){
        $cv = ($dai +$rong)*2;
        return $cv;
    }

    //Xây dựng hàm tính diện tích hcn
    function dientich($dai,$rong){
        $dt = $dai *$rong;
        return $dt;
    }

    // Khai báo
    // $dai =10; $rong = 20;
    // echo "Chiều dài là: $dai, Chiều rộng là: $rong <br>";
    echo "Chu vi hcn là: " .chuvi(30, 10);
    // echo "<br>Diện tích hcn là: " .dientich($dai, $rong);

    ?>