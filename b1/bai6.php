<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Toán tử trong php 
            cộng + 
            trừ - 
            nhân * 
            chia / 
            phần dư % 
            luỹ thừa 
        */
        $a = 5; 
        $b = 3;
        echo "Cho a = $a và b = $b <hr>";
        $tong = $a + $b;
        $hieu = $a - $b;
        $tich = $a * $b;
        $thuong = $a / $b;
        $phandu = $a % $b;
        $luythua = $a ** $b;
        echo "Tổng a và b là: $tong";
        echo "<br>Hiệu a và b là: $hieu";
        echo "<br>Tích a và b là: $tich";
        echo "<br>Thương a và b là: $thuong";
        echo "<br>Phần dư a và b là: $phandu";
        echo "<br>Luỹ thừa a và b là: $luythua";

    ?>
</body>
</html>