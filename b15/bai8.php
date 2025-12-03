<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        VCT xử lí mảng <br>
        Nhập số phần tử: <input type="text" name="txtspt" value="<?php  if (isset($_POST['txtspt'])) echo $_POST ['txtspt']; ?>"> 
        <input type="submit" value="Xử lí">
    </from>
    <?php
        // Kiểm tra dữ liệu nhập
        if(isset($_POST['txtspt'])){
            $spt = $_POST['txtspt'];
            // echo "<br>" . $spt;
            echo "<br>";

            $gtmin=0;
            $gtmax = 50;
            $mangA = [];
            for ($i = 1; $i <= $spt; $i ++){
                $snn = rand($gtmin,$gtmax);
                $mangA[] = $snn;
                // echo $snn;
                // echo ", ";
            }
            // Hiển thị cách 1
            echo "Hiển thị mảng cách 1 là: ";
            echo "Mảng A là: ";
            print_r($mangA);
            // Hiển thị cách 2
            echo "<br> <br> Hiển thị mảng cách 2 là: ";
            echo implode (", ", $mangA);
            
        }
    ?>
</body>
</html>