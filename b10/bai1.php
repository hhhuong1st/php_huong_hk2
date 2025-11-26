<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        VCT Tính chu vi và diện tích hình chữ nhật <br>
        Nhập chiều dài: <input type="number" name="txtdai" id="" value="<?php  if (isset($_POST['txtdai'])) echo $_POST ['txtdai']; ?>"> <br>
        Nhập chiều rộng: <input type="number" name="txtrong" id="" value="<?php  if (isset($_POST['txtrong'])) echo $_POST ['txtrong']; ?>">
        <input type="submit" value="Xử lý">
    </form>
    <?php
        if (isset($_POST['txtdai']) && isset($_POST['txtrong'])) {
            $A = $_POST['txtdai'];
            $B = $_POST['txtrong'];
            $chieudai = ($A +$B) *2;
            $chieurong = ($A *$B);
             echo "Chu vi HCN là:  $chieudai "; 
            echo "<br>";
            echo "Diện tích HCN là:  $chieurong ";
        }
    ?>
</body>
</html>