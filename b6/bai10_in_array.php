<?php
    $so = array(10,20,30,40,50);
    echo "Mảng ban đầu là: <br>";

    print_r($so);
    // echo "<br>Kiểm tra số 10 có trong mảng không: ";
    // var_dump (in_array(10, $so));

    if (in_array(10, $so)==true){
        echo "Kết quả tìm số 10 là: Có";
    } else {
        echo "Kết quả tìm số 10 là: Không";
    }
?>