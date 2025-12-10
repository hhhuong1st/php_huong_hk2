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
                    Nhập chuỗi A: <input type="text" name="txts" value="<?php  if (isset($_POST['txts'])) echo $_POST ['txts']; ?>"> <br>
                    Giá trị: <input type="text" name="txtgt" value="<?php if(isset($_POST['txtgt'])) echo $_POST['txtgt']; ?>"> <br>
                    <input class ="sm" type="submit" value="Xử lý" name="xl"> <br> 
                </div>
        </from>
        <?php
               if (isset($_POST['xl'])) {
                $n  = $_POST['txts'];   
                $gt = $_POST['txtgt']; 
                $mangA = [];
                $mangB = [];

                $mangA = [];
                for ($i = 1; $i <= $n; $i++) {
                    $mangA [] = rand(0, 10);
                    $mangB [] = rand(0, 10);
                }

                $mangA[] = $gt;
                echo '<p class="cauhoi">Mảng sau khi thêm giá trị '.$gt.':</p>';
                echo '<p class="cautraloi" style="color: green;">'.implode(", ", $mangA).'</p>';

                $mangA[] = $gt;
                echo '<p class="cauhoi">Mảng sau khi thêm giá trị '.$gt.':</p>';
                echo '<p class="cautraloi" style="color: green;">'.implode(", ", $mangA).'</p>';

                // Thêm giá trị vào mảng A
                $mangA[] = $gt;
                echo '<p class="cauhoi">Câu 2:</p>';
                echo '<p class="cautraloi" style="color: green;">Mảng A sau khi thêm giá trị: [' . implode(", ", $mangA) . ']</p>';

                // Ghép 2 mảng thành mảng C
                $mangC = array_merge($mangA, $mangB);
                echo '<p class="cauhoi">Câu 3:</p>';
                echo '<p class="cautraloi" style="color: purple;">Mảng C = A + B: [' . implode(", ", $mangC) . ']</p>';

                // Lấy các phần tử chẵn từ mảng B
                $chan = [];
                foreach ($mangB as $value) {
                    if ($value % 2 == 0) {
                        $chan[] = $value;
                    }
                }

                echo '<p class="cauhoi">Câu 4:</p>';
                echo '<p class="cautraloi" style="color: orange;">Các số chẵn của mảng B: [' . implode(", ", $chan) . ']</p>';

            }
        ?>
    </div>
</body>
</html>
