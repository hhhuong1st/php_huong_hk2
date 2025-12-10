<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Xử lý mảng số nguyên</title>
    <style>
        /* .baitap1{
            background: #f1eee3cc; 
        } */
        body {
            font-family: 'Segoe UI', sans-serif;
            /* background: linear-gradient(135deg, #dfe9f3, #fceef5); */
            /* margin: 0;
            padding: 0; */
            display: flex;
            flex-direction: column;
            align-items: center;
            /* background: #f1eee3cc;  */
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
        .sm{
            background: #eece1bcc; 
            /* border-radius: 18px; */
            /* border: none; */
            padding: 8px;
            text-align: center;
            margin-top: 15px; 
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
        <h2>VCT xử lí mảng</h2>
        <div class="khung">
            Nhập số phần tử: <input type="text" name="txts" value="<?php if(isset($_POST['txts'])) echo $_POST['txts']; ?>"> <br> 
            Giá trị thêm: <input type="text" name="txtgt" value="<?php if(isset($_POST['txtgt'])) echo $_POST['txtgt']; ?>"> <br>
            <input class="sm" type="submit" value="Xử lý"> 
        </div>
    </form>

    <?php
        if(isset($_POST['txts']) && isset($_POST['txtgt'])){
            $spt = $_POST['txts'];
            $gt = $_POST['txtgt'];

            $mangA = [];
            for ($i = 1; $i <= $spt; $i++) {
                $mangA [] = rand(0, 20);
            }

            echo '<p class="cauhoi">Mảng được tạo:</p>';
            echo '<p class="cautraloi" style="color: blue;">'.implode(", ", $mangA).'</p>';

            $mangA[] = $gt;
            echo '<p class="cauhoi">Mảng sau khi thêm giá trị '.$gt.':</p>';
            echo '<p class="cautraloi" style="color: green;">'.implode(", ", $mangA).'</p>';

            array_shift($mangA);
            echo '<p class="cauhoi">Mảng sau khi xóa phần tử đầu tiên:</p>';
            echo '<p class="cautraloi" style="color: orange;">'.implode(", ", $mangA).'</p>';

            $tong = array_sum($mangA);
            echo '<p class="cauhoi">Tổng các phần tử trong mảng:</p>';
            echo '<p class="cautraloi" style="color: purple;">'.$tong.'</p>';
        }
    ?>
    </div>
</body>
</html>
