<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Cách 1: define
        define("luong", 50);
        $songaycong = 5;
        $thanhtien = luong*$songaycong;
        echo "C1 define: Tổng tiền công là: ";
        echo "$thanhtien";

        //Cách 2: define
        define("tienluong", 50);
        $songaycong = 5;
        echo "<br>C2 define: Tổng tiền công là: ". tienluong*$songaycong;

        //Cách 1: const
        const luongnv = 50;
        $songaycong = 5; 
        echo "<hr>C1 const: Thành tiền là: " . $songaycong*luong;

        

    ?>
</body>
</html>