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
        Nhập chuỗi: <input type="text" name="txtchuoi" value="<?php  if (isset($_POST['txtchuoi'])) echo $_POST ['txtchuoi']; ?>"> 
        <input type="submit" value="Xử lí">
    </from>
    <?php
        // Kiểm tra dữ liệu nhập
        if(isset($_POST['txtchuoi'])){
            $chuoi = $_POST['txtchuoi'];
            // Xây dựng hàm
            function cau1_cau2($chuoi){
                $chuhoa = strtoupper($chuoi);
                echo "<br>Chuỗi s1 chuyển thành chữ hoa là:" . $chuhoa;

                $demskt = strlen($chuoi);
                echo "<br>Chuỗi s1 chuyển thành chữ hoa là:" . $demskt;
            }
            // Gọi hàm
            cau1_cau2($chuoi);
        }
    ?>
</body>
</html>