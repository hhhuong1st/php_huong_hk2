<?php
    //Hàm không đổi tham số
    function xinchao1(){
        echo "Xin chào bạn";
    }

    //Hàm đổi tham số
    function xinchao2($ten){
        echo "Xin chào bạn $ten";
    }

    function tinhtong ($so1, $so2){
        $tong = $so1 +$so2;
        return $tong;
    }

    //Gọi hàm xinchao1
    xinchao1();

    //Gọi hàm xinchao2
    $ten="Hương";
    echo "<br>";
    xinchao2($ten);

    //Gọi hàm tính tổng
    $so1 = 5;
    $so2 = 10;
    echo "<br> Tổng là: " . tinhtong($so1, $so2);

    //Xây dựng tính chu vi
    function chuvi($dai, $rong){
        $cv = ($dai +$rong)*2;
        return $cv;
    }

    $dai =20; $rong =10;
    echo "<hr> Chiều dài = $dai, Chiều rộng = $rong";
    echo  "<br> Chu vi hình chữ nhật là: " . chuvi($dai, $rong);
?>
