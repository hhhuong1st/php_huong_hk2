<?php
    $s1 = "Laptrinh";
    $s2 = "php";
    echo "Cho chuỗi 1 là: ". $s1;
    echo "<br>Cho chuỗi 2 là: ". $s2;
    //Chiều dài chuỗi
    echo "<br> Chiều dài chuỗi 1 là: ". strlen($s1);
    echo "<br>Chiều dài chuỗi 2 là: ". strlen($s2);
    echo "<hr>";
    // Nối chuỗi
    $s3 = implode(" ", [$s1, $s2]);
    // Lấy vị trí từ phần tử thứ
    $s4 = substr($s1, 0, 3);
    // Vị trí chữ
    $s5 = strpos($s1, "trinh");
    // Thay thế chữ
    $s6 = str_replace("trinh","trinhlagi", $s1);
    // So sánh chuỗi
    if ((strcmp($s1, $s2)) > 0) {
        echo " <br> S1 > S2";
    } elseif ((strcmp($s1, $s2)) == 0){
        echo " <br> S1 = S2";
    } else {
        echo " <br>S1 < S2";
    }

    //Xử lí
    echo "<br>Nối hai chuỗi lại là: " . $s3;
    echo "<br>Lấy vị trí từ 0 đến 3 là: " . $s4;
    echo "<br>Vị trí chữ trinh la: " . $s5;
    echo "<br>Thay thế chữ trinh thành trinhlagi là: " . $s6;
?>


<?php
    echo "<hr>";
    $so = array(5, 10, 20, 25);
    echo "Mảng ban đầu là: ";
    print_r($so);


    array_push($so, 30);
    echo "<br> Thêm 1 phần tử vào cuối mảng là: ";
    print_r($so);

    array_pop($so);
    echo "<br> Sau khi xoá phần tử cuối mảng là: ";
    print_r($so);

    array_unshift($so, 20);
    echo "<br> Sau khi thêm 1 phần tử vào đầu mảng là: ";
    print_r($so);

    array_shift($so);
    echo "<br> Sau khi xoá phần tử đầu tiên là: ";
    print_r($so);

    $so1 = array_slice($so, 1,3);
    echo "<br> Trích xuất mảng mới là: ";
    print_r($so1);

    rsort($so);
    echo "<br> Mảng sắp xếp giảm dần là: ";
    print_r($so);

    // echo "<br>Kiểm tra số 20 có trong mảng không: ";
    //     var_dump (in_array(20, $so));

    if (in_array(20, $so)==true){
            echo "<br> Kết quả tìm số 20 là: Có";
        } else {
            echo "<br> Kết quả tìm số 20 là: Không";
        }
?>