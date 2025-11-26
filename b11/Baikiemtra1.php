<?php
    $M = [1,2,3,6,20,12];
    echo "Mảng ban đầu là: ";
    print_r($M);
    // a) Xoá 2 phần tử cuối mảng M
    array_pop($M);
    array_pop($M);
    echo "<br><br> a) Sau khi xoá 2 phần tử cuối mảng là: ";
    print_r($M);

    // b) Thêm 3 phần tử vào cuối mảng
    array_push($M, 5, 10, 15);
    echo "<br><br> b) Thêm 3 phần tử vào cuối mảng là: ";
    print_r($M);

    // c) Tính tổng
    echo "<br><br> c) Tổng giá trị của phần tử của mảng M là: " . array_sum($M);
    
    // d) Trích xuất mảng
    $N = array_slice($M, 1,3);
    echo "<br><br> d) Trích xuất mảng mới từ vị trí 1 đến vị trí 3 là: ";
    print_r($N);
    
    // e) Tìm phần tử
    if (in_array(2, $M)==true){
            echo "<br><br> e) Kết quả tìm số 2 mảng M là: Có";
        } else {
            echo "<br> Kết quả tìm số 2 mảng M là: Không";
        }
    if (in_array(2, $N)==true){
            echo "<br> Kết quả tìm số 2 mảng N là: Có";
        } else {
            echo "<br> Kết quả tìm số 2 mảng N là: Không";
        }
    
        // f) Hợp nhất 2 mảng
    echo "<br><br> f) Hợp nhất mảng M và N là: ";
    $K = array_merge($M, $N);
    print_r ($K);
?>