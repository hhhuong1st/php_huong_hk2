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
        Chuỗi S1: <input type="text" name="txts1" value="<?php  if (isset($_POST['txts1'])) echo $_POST ['txts1']; ?>"> <br>
        Chuỗi S2: <input type="txt" name="txts2" value="<?php  if (isset($_POST['txts2'])) echo $_POST ['txts2']; ?>">
        <input type="submit" value="Gửi"> <br> 
    </from>
    <?php
        if(isset($_POST['txts1']) && isset($_POST['txts2'])){
            $s1 = $_POST['txts1'];
            $s2 = $_POST['txts2'];
            // echo "<br> Chuỗi 1 là: ". $s1;
            // echo "<br>Chuỗi 2 là: ".$s2;
            // Chữ hoa chữ thường
            echo "<br>Câu a: <br>";
            echo "<br>Chuỗi s1 chuyển thành chữ hoa là: ".strtoupper($s1);
            echo "<br> Chuỗi s2 chuyển thành chữ thường là: ".strtolower($s2);
            // Chiều dài kí tự
            echo "<hr> Câu b: <br>";
            echo "<br>Chiều dài chuỗi s1 là: " .strlen($s1);
            echo "<br>Chiều dài chuỗi s2 là: " .strlen($s2);
            // Nối chuỗi
            echo "<hr> Câu c: <br>";
            $s3 = implode (' ',[$s1,$s2]);
            echo "<br>Nối chuỗi s1 với s2 lại là: $s3";
        }
    ?>
</body>
</html>
