<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
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
    
            // Xây dựng hàm giải câu a
            function caua($s1,$s2){
                echo "<br>Câu a: <br>";
                echo "<br>Chuỗi s1 chuyển thành chữ hoa là: ".strtoupper($s1);
                echo "<br> Chuỗi s2 chuyển thành chữ thường là: ".strtolower($s2);
            }

            // Xây dựng hàm giải câu b
            function caub($s1,$s2){
                // Câu a
                echo "<hr>Câu b: <br>";
                echo "<br>Chiều dài chuỗi s1 là: " .strlen($s1);
                echo "<br>Chiều dài chuỗi s2 là: " .strlen($s2);
            }

            // Xây dựng hàm giải câu c
            function cauc($s1,$s2){
                // Câu c
                echo "<hr>Câu c: <br>";
                $s3 = implode (' ',[$s1,$s2]);
                echo "<br>Nối chuỗi s1 với s2 lại là: $s3";
            }

            // Gọi hàm
            caua($s1,$s2);
            caub($s1,$s2);
            cauc($s1,$s2);
        }
    ?>
</body>
</html>
