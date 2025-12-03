<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        // khai bao
        $_SESSION["hoten"] = "Huỳnh Huyền Hương";
        $_SESSION['lop']="24CDTKW01";
        $_SESSION['matkhau']='123';
        echo 'Session đã được tạo';
    ?>
</body>
</html>