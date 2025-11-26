<?php
    echo "Viết chương trình xử lý chuỗi: <br>";
    $s1 = "thietKEweb";
    $s2 = "thiet";
    echo "Cho chuỗi 1 là: ". $s1;
    echo "<br>Cho chuỗi 2 là: ". $s2;


    //Chiều dài chuỗi
    echo "<hr>  Câu a. Đếm số ký tự (chiều dài) chuỗi 1";
    echo "<br> Chiều dài chuỗi 1 là: ". strlen($s1);


    //Tách chuỗi
    echo "<hr>Câu b. Tách chuỗi 1 từ vị trí 5 lấy 2 ký tự thành chuỗi 3";
    echo "<br>Cho chuỗi 1 là : ". $s1;
    $s3 = substr($s1, 5, 2);
    echo "<br>Lấy vị trí từ 0 đến 3 là: " . $s3;


    //Chữ thường
    echo "<hr>Câu c. Chuyển chuỗi 1 thành chữ thường, chuỗi 2 thành chữ hoa";
    echo " <br> Cho chuỗi 1 là: ". $s1;
    $s3 = strtolower ($s1);
    echo "<br> Chuỗi chuyển thành chữ thường là: " .$s3;


    //Chữ hoa
    echo " <br> Cho chuỗi 2 là: ". $s2;
    $s4 = strtoupper ($s2);
    echo "<br> Chuỗi chuyển thành chữ hoa là: " .$s4;


    // Chuỗi thay thế
    echo "<hr>Câu d.	Tìm chữ “web” trong chuỗi 1 thay thế thành “dohoa”";
    echo " <br> Cho chuỗi 1 là: ". $s3;
    $s5 = str_replace("web","dohoa", $s3);
    echo "<br>Thay thế chữ web thành dohoa là: " . $s5;


    // So sánh chuỗi
    echo "<hr>Câu e.	Chuyển chuỗi 1 và chuỗi 2 thành chữ thường, So sánh chuỗi 1 và chuỗi 2";
    echo "<br>Cho chuỗi 1 là : ". $s3;
    echo "<br>Cho chuỗi 2 là : ". $s2;
    if ((strcmp($s3, $s2)) > 0) {
        echo " <br> Chuỗi 1 > Chuỗi 2";
    } elseif ((strcmp($s3, $s2)) == 0){
        echo " <br> Chuỗi 1 = Chuỗi 2";
    } else {
        echo " <br>Chuỗi 1 < Chuỗi 2";
    }
?>

