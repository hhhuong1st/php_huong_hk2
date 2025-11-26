<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       Email: <input type="text" name="txtemail" id=""> <br>
       Password: <input type="password" name="txtpass" id="">
       <input type="submit" value="Đăng nhập" name="btndn">
       <!-- <button type="submit" name="btndn">Đăng nhập</button> -->
    </form>
    <?php
         if (isset($_POST['btndn'])) {
            $Email = $_POST['txtemail'];
            $Pass = $_POST['txtpass'];
            echo "Email là: $Email";
            echo "<br>";
            echo "Pass là: $Pass";

            if(filter_var($Email, FILTER_VALIDATE_MAIL)){
                echo "Email hợp lệ";
            } 
            else {
                echo "Email không hợp lệ";
            }
         }
    ?>
</body>
</html>