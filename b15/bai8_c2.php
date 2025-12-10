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
            }
            // Hiển thị cách 1
            echo "Hiển thị mảng cách 1 là: ";
            echo "Mảng A là: ";
            print_r($mangA);

            // Hiển thị cách 2
            echo "<br> Hiển thị mảng cách 2 là: ";
            echo implode (", ", $mangA);

            // // Thêm vào cuối mảng
            // array_push($mangA, 2, 3);
            // echo "<br>Mảng A sau khi thêm: ";
            // echo implode (", ", $mangA);

            // // Xoá phần tử cuối mảng
            // array_pop($mangA);
            // echo "<br>Mảng A sau khi xoá: ";
            // echo implode (", ", $mangA);


            // Xây dựng hàm thêm 2 và 3
            function thempt($mangA){
                array_push($mangA,2,3) ;
                echo "<br>Mảng A sau khi thêm: ";
                echo implode (", ", $mangA);
            }

            thempt($mangA);
            
        }
    ?>
</body>
</html>