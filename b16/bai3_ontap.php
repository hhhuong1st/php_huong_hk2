<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            /* background: linear-gradient(135deg, #dfe9f3, #fceef5); */
            /* margin: 0;
            padding: 0; */
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
            text-align: text;
             
            
        }
        .sm{
            background: #eece1bcc; 
            /* border-radius: 18px; */
            /* border: none; */
            padding: 8px;
            display: block;    
            width: fit-content;     
            margin: 10px auto;
            text-align: center;
            margin-bottom: -15px; 
        }

        form {
            background: #f1eee3cc; 
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
    <div class="baitap1">
        <form action="#" method="post">
                <h2> VCT xử lí chuỗi </h2>
                <div class="khung">
                    Nhập chuỗi A: <input type="text" name="txts1" value="<?php  if (isset($_POST['txts1'])) echo $_POST ['txts1']; ?>"> <br>
                    Nhập chuỗi B: <input type="txt" name="txts2" value="<?php  if (isset($_POST['txts2'])) echo $_POST ['txts2']; ?>"> <br>
                    Số lần: <input type="text" name="txtsolan" value="<?php if(isset($_POST['txtsolan'])) echo $_POST['txtsolan']; ?>"> <br>
                    <input class ="sm" type="submit" value="Xử lý" name="xl"> <br> 
                </div>
        </from>
        <?php
               if (isset($_POST['xl'])) {
                $A = $_POST['txts1'];
                $B = $_POST['txts2'];
                $n = $_POST['txtsolan'];

                echo '<p class="cauhoi">Câu 1:</p>';
                echo '<p class="cautraloi" style="color: blue;">Chuỗi A viết hoa: ' . strtoupper($A) . '</p>';
                echo '<p class="cautraloi" style="color: blue;">Chuỗi B viết hoa: ' . strtoupper($B) . '</p>';

                // Đảo ngược chuỗi B rồi lặp lại n lần
                echo '<p class="cauhoi">Câu 2:</p>';
                $daoB = strrev($B);
                $lapB = str_repeat($daoB, $n);
                echo '<p class="cautraloi" style="color: green;">Chuỗi B đảo ngược: ' . $daoB . '</p>';
                echo '<p class="cautraloi" style="color: green;">Lặp lại ' . $n . ' lần: ' . $lapB . '</p>';

                // Nối chuỗi A và B thành chuỗi C
                echo '<p class="cauhoi">Câu 3:</p>';
                $C = $A . $B;
                echo '<p class="cautraloi" style="color: orange;">Chuỗi C = A + B: ' . $C . '</p>';

                // Tìm chuỗi B trong chuỗi A
                echo '<p class="cauhoi">Câu 4:</p>';

                if (strpos($A, $B) !== false) {
                    echo '<p class="cautraloi" style="color: purple;">Tìm thấy</p>';
                } else {
                    echo '<p class="cautraloi" style="color: red;"> Không tìm thấy</p>';
                }

            }
        ?>
    </div>
</body>
</html>
