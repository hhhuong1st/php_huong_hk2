<?php
    $ck_name = "hoten";
    $ck_value = "Huỳnh Huyền Hương";
    setcookie ($ck_name, $ck_value, time()+(86400*30),"/")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$ck_name])){
            echo "Cookie chưa được tạo";
        }
        else {
            echo "Cookie đã được tạo";
            echo "<br>Với giá trị là: $ck_value";
        }

    ?>
</body>
</html>