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
        Pass: <input type="password" name="txtpass" id="">
        <input type="submit" value="Gửi" name="submit">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $Email = $_POST['txtemail'];
            $Pass = $_POST['txtpass'];
            // echo "Email là: $Email";
            // echo "<br>";
            // echo "Pass là: $Pass";
            //
            $Email = filter_var($Email, FILTER_SANITIZE_EMAIL);
            echo "Email khi xử lí lại là: $Email";

         }
         
    ?>
</body>
</html>