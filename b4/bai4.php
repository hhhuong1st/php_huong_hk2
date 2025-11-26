<?php
    echo "Sử dụng vòng lặp for in từ 1 đến 10: <br>";
    for ($i=1; $i <= 10 ; $i++) { 
       echo "$i ";
    }
    
    echo "<hr> Sử dụng vòng lặp for in từ 1 đến 10 là số lẻ: <br>";
    for ($i=1; $i <= 10 ; $i++) {
        if ($i % 2 == 1) {
             echo "$i ";
        } 
    }

    
    echo "<hr> Sử dụng vòng lặp while in từ 1 đến 10: <br>";
    $i=1;
    while ($i <= 10) {
       echo "$i ";
       $i++;
    }

    echo "<hr> Sử dụng vòng lặp do while in từ 1 đến 10: <br>";
    $i=1;
    do {
       echo "$i ";
       $i++;
    }
    while ($i <= 10)
    
?>