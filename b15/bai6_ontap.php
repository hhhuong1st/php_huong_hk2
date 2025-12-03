<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        VCT xử lí chuỗi <br>
        Nhập chuỗi: <input type="text" name="txtchuoi" value="<?php  if (isset($_POST['txtchuoi'])) echo $_POST ['txtchuoi']; ?>"> <input type="submit" value="Xử lí">
    </from>
    <?php
        // Kiểm tra dữ liệu nhập
        if(isset($_POST['txtchuoi'])){
            $s1 = $_POST['txtchuoi'];
            echo "<br> <br> Chuỗi 1 là: ".$s1;
            echo "<br>Chuỗi s1 chuyển thành chữ hoa là: ".strtoupper($s1);
        }
    ?>
</body>
</html>