<?php

    // Xây dựng hàm in bảng cửu chương dùng for
    function bangcuuchuong_dungfor($so){
        echo "VCT xây dựng hàm in ra bảng cửu chương : $so <hr>";
        for ($i=1; $i <= 10 ; $i++) { 
            echo " $so x $i = " . ($so * $i) . "<br>";
        }
    }

    // Xây dựng hàm in bảng cửu chương dùng while
    
    function bangcuuchuong_dungwhile($so){
        $i=1;
        while($i <=10){
            echo " $so x $i = " . ($so * $i) . "<br>";
            $i++;
        }
    }


    // Xây dựng hàm in bảng cửu chương dùng while
    
    function bangcuuchuong_dungdowhile($so){
        $i=1;
        do{
            echo " $so x $i = " . ($so * $i) . "<br>";
            $i++;
        }
        while ($i <=10);
    }

    // Khai báo 
    $so =5;
    bangcuuchuong_dungfor($so); 
    echo "<hr>";
    bangcuuchuong_dungwhile($so);
    echo "<hr>";
    bangcuuchuong_dungdowhile($so);
?>