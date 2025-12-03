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
            echo "<br> <hr> Số phần tử ".$spt;
            }
    ?>
</body>
</html>