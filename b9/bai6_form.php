<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Kiểm tra dữ liệu nhập
        if(isset($_POST['txthoten'])){
            $hoten = $_POST['txthoten'];
            echo "Họ tên của bạn là: ".$hoten;
        }

        if(isset($_POST['txtmatkhau'])){
            $matkhau = $_POST['txtmatkhau'];
            echo "<br> Mật khẩu của bạn là: ". $matkhau;
        }
    ?>
    <form action="#" method="post">
        Họ tên: <input type="text" name="txthoten"> <br>
        Mật khẩu: <input type="password" name="txtmatkhau">
        <input type="submit" value="Gửi">
    </form>
    
</body>
</html>