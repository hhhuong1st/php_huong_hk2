<?php
    $a = 2;
    $b = 3;
    $c = 4;
    $t = $a + $b;
    $s1 = (($a*$a) + ($b*$b));
    $s2 = (($a*$a) - ($b*$b));
    

    echo "VCT tính toán sau: a=$a, b=$b, c=$c <hr>";
    if ($a % 2 == 0){
        echo "$a là số chẵn <br>";
    }
    else{
        echo "$a là số lẻ <br>";
    }

    if ($b % 2 == 0){
        echo "$b là số chẵn <br>";
    }
    else{
        echo "$b là số lẻ <br>";
    }


    echo "Nếu $a + $b > $c thì: <br>";
    if ($t > $c){

        echo " S1 = a^2 + b^2 = $s1";
    }
    else{
        echo "$s2";
    }
?>