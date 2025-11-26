<?php
    $s1 = "Laptrinh";
    $s2 = "php";
    echo "Cho chuỗi 1 là: ". $s1;
    echo "<br>Cho chuỗi 2 là: ". $s2;
    //Chiều dài chuỗi
    echo "<br> Chiều dài chuỗi 1 là: ". strlen($s1);
    echo "<br>Chiều dài chuỗi 2 là: ". strlen($s2);
?>

<?php
    $s1 = "Huynh Huyen";
    $s2 = "Huong";

    echo "<hr>Cho chuỗi 1 là: ". $s1;
    echo "<br>Cho chuỗi 2 là : ". $s2;
    //Chiều dài chuỗi
    $s3 = implode(" ", [$s1, $s2]);
    echo "<br>Nối hai chuỗi lại là: " . $s3;
?>


<?php
    $s1 = "Huynh";
    echo "<hr>Cho chuỗi 1 là : ". $s1;
    $s3 = substr($s1, 0, 3);
    echo "<br>Lấy vị trí từ 0 đến 3 là: " . $s3;
?>

<?php
    $s1 = "HuynhHuong";
    echo "<hr>Cho chuỗi 1 là : ". $s1;
    $s3 = strpos($s1, "Huong");
    echo "<br>Vị trí chữ Huong la: " . $s3;
?>


<?php
    $s1 = "HuynhHuyen";
    echo "<hr>Cho chuỗi 1 là : ". $s1;
    $s3 = str_replace("Huyen","Huong", $s1);
    echo "<br>Thay thế chữ Huyen thanh Huong là: " . $s3;
?>

<?php
    $s1 = "Huyenn";
    echo "<hr>Cho chuỗi 1 là : ". $s1;
    $s2 = "Huyen";
    echo "<br>Cho chuỗi 2 là : ". $s2;
    if ((strcmp($s1, $s2)) > 0) {
        echo " <br> S1 > S2";
    } elseif ((strcmp($s1, $s2)) == 0){
        echo " <br> S1 = S2";
    } else {
        echo " <br>S1 < S2";
    }
?>