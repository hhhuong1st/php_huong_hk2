<?php

   $n = 6;
    echo "Sử dụng vòng lặp for in ra bảng cửu chương $n: <br>";
    for ($i=1; $i <= 10 ; $i++) { 
      echo " $n x $i = " . ($n * $i) . "<br>";
    }

    echo "<hr>Sử dụng vòng lặp while in ra bảng cửu chương $n: <br>";
    $i=1;
    while ($i <= 10) { 
      echo " $n x $i = " . ($n * $i) . "<br>";
      $i++;
    }

    echo "<hr>Sử dụng vòng lặp do while in ra bảng cửu chương $n: <br>";
    $i=1;
    do{ 
      echo " $n x $i = " . ($n * $i) . "<br>";
      $i++;
    }
      while ($i <= 10) 
    
    
?>