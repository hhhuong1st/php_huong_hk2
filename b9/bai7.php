<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        VCT tính tổng a và b <br>
        Nhập a: <input type="text" name="txta" id=""> <br>
        Nhập b: <input type="text" name="txtb" id="">
        <input type="submit" value="Xử lý">

    </form>
    <?php
        // Kiểm tra nhập
        if(isset($_POST['txta']) && isset($_POST['txtb'])){
            $a = $_POST['txta'];
            $b = $_POST['txtb'];
            $tong = $a + $b;
            echo "Tổng a và b là: $tong";
        }
    ?>
</body>
</html>