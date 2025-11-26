<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bai3.css">
</head>
<body>
    <div class="noidung">
        <h2> <marquee behavior="" direction=""> Bài tập vòng lặp for</marquee></h2>
        <?php

   $n = 6;
    echo " <span> Sử dụng vòng lặp for in ra bảng cửu chương $n: </span><br>";
    for ($i=1; $i <= 10 ; $i++) { 
      echo " $n x $i = " . ($n * $i) . "<br>";
    }

    echo "<hr> <span>Sử dụng vòng lặp while in ra bảng cửu chương $n: </span> <br>";
    $i=1;
    while ($i <= 10) { 
      echo " $n x $i = " . ($n * $i) . "<br>";
      $i++;
    }

    echo "<hr><span>Sử dụng vòng lặp do while in ra bảng cửu chương $n: </span><br>";
    $i=1;
    do{ 
      echo " $n x $i = " . ($n * $i) . "<br>";
      $i++;
    }
      while ($i <= 10) 
    
    
?>
    </div>
</body>
</html>