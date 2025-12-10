<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #dfe9f3, #fceef5);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .khung{
            background: #38b4e6cc; 
            padding: 10px;
            border-radius: 6px;
            display: block;         
            width: fit-content;     
            margin: 10px auto;       
            text-align: center; 
            
        }

        form {
            background: #e4e9bbcc; 
            padding: 30px;
            margin-top: 40px;
            border-radius: 18px;
            width: 380px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            border: 2px solid #fff;
        }

        form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4a4a4a;
            font-size: 23px;
            font-weight: 600;
        }
        form h2 {
            margin-top: 0;
            color: red;   
        }

        .cauhoi {
            background: #72e256cc;
            color: black;
            font-size: 18px;
            padding: 5px 12px;
            border-radius: 6px;
            display: block;         
            width: fit-content;     
            margin: 10px auto;       
            text-align: center;     
        }

        .cautraloi {
            text-align: center;
            margin-bottom: ;
            padding-left: 10px;
            font-size: 18px;
            margin-top: 10px;
        }

        
    </style>
</head>
<body>
    <form action="#" method="post">
            <h2> VCT xử lí chuỗi </h2>
            <div class="khung">
                Nhập chuỗi A: <input type="text" name="txts1" value="<?php  if (isset($_POST['txts1'])) echo $_POST ['txts1']; ?>"> <br>
                Nhập chuỗi B: <input type="txt" name="txts2" value="<?php  if (isset($_POST['txts2'])) echo $_POST ['txts2']; ?>">
            <input type="submit" value="Xử lý"> <br> 
        </div>
    </from>
    <?php
        if(isset($_POST['txts1']) && isset($_POST['txts2'])){
            $s1 = $_POST['txts1'];
            $s2 = $_POST['txts2'];
            // Chữ thường thành chữ hoa
            echo '<p class="cauhoi">Câu 1:</p>';
            echo '<p class="cautraloi" style="color: blue;">Chuyển chuỗi A thành chữ hoa là: ' . strtoupper($s1) . '</p>';
            // Chữ hoa thành chữ thường
            echo '<p class="cauhoi">Câu 2:</p>';
            echo '<p class="cautraloi" style="color: green;">Chuyển chuỗi B thành chữ thường là: '.strtolower($s2).'</p>';
            // Chiều dài kí tự
            echo '<p class="cauhoi">Câu 3:</p>';
            echo '<p class="cautraloi" style="color: orange;">Đếm số kí tự chuỗi A là: '.strlen($s1).'</p>';
            // Lặp lại chuỗi B 3 lần
            echo '<p class="cauhoi">Câu 4:</p>';
            $s3 = str_repeat($s2, 3);
            echo '<p class="cautraloi" style="color: purple;">Lặp lại chuỗi B 3 lần: '.$s3.'</p>';
            // Đảo ngược chuỗi B
            echo '<p class="cauhoi">Câu 5:</p>';
            echo '<p class="cautraloi" style="color: brown;">Đảo ngược chuỗi B: '.strrev($s2).'</p>';
            // Mã hoá chuỗi A và giải mã chuỗi
            echo '<p class="cauhoi">Câu 6:</p>';
            $mahoa = base64_encode($s1);
            $giaima = base64_decode($mahoa);
            echo '<p class="cautraloi" style="color: red;">Mã hoá chuỗi A là: '.$mahoa.'</p>';
            echo '<p class="cautraloi" style="color: teal;">Giải mã chuỗi A: '.$giaima.'</p>';
        }
    ?>
</body>
</html>
