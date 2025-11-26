<?php

    //Cách 1
    $a = 3;
    $b = 2;
    $c = 1;
    echo "a là: $a, b là: $b, c là: $c <br>";
    if($a >= $b){
       $max = $a;
       if($max >= $c ){
            $max = $a;
       }
       else{
            $max = $c;
       }
    }
    else{
        $max = $b;
        if($max >= $c){
            $max = $b;
        }
        else{
            $max = $c;
        }
    }
    echo "Số lớn nhất là: $max";


    //Cách 2
    $a = 3;
    $b = 2;
    $c = 1;
    echo "<hr>a là: $a, b là: $b, c là: $c <br>";
    //a lớn nhất a lớn hơn tất cả các số còn lại
    if($a >= $b && $a >= $c){
        $max = $a;
    }
    if($b >= $a && $b >= $c){
        $max = $b;
    }
    if($c >=$a && $c >= $b){
        $max = $c;
    }
    echo "Số lớn nhất là: $max"
?>