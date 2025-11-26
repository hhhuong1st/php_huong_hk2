<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $goc = "Lập trình PHP";
        $tim = "/php/i"; //Thêm i là không phân biệt chữ hoa chữ thường
        if(preg_match($tim, $goc, $A)){

            echo "Tìm thấy ".$A[0];
        }
        else{
            echo "Không thấy";
        }
    ?>

    <?php
        echo "<hr>";
        $goc = "Lập trình PHP";
        $tim = "/Lập/"; //Thêm i là không phân biệt chữ hoa chữ thường
        $A = preg_split($tim, $goc);
        print_r($A);
    ?>

    <?php
        echo "<hr>";
        $goc = array("Lập trình PHP","Lập trình Web");
        $tim = "/Web/"; //Thêm i là không phân biệt chữ hoa chữ thường
        $thay = "C";
        $A = preg_filter($tim, $thay, $goc);
        print_r($A);
    ?>

    <?php
        echo "<hr>";
        $nguoinhan = "Huong@gmail.com";
        $tieude = "Chào m";
        $noidung = "Chúc mừng đăng kí thành công";
        $nguoigui ="Form: Khoa@gmail.com";
        // Gửi
        if ( mail($nguoinhan, $tieude, $noidung, $nguoigui)){
            echo "Gửi mail thành công";
        }
        else {
            echo "Gửi mail thất bại";
        }
    ?>
</body>
</html>