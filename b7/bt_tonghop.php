<?php
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

$so1 = array_slice($so, 1,3);
echo "<br> Trích xuất mảng mới là: ";
print_r($so1);

// echo "<br>Kiểm tra số 20 có trong mảng không: ";
//     var_dump (in_array(20, $so));

if (in_array(20, $so)==true){
        echo "<br> Kết quả tìm số 20 là: Có";
    } else {
        echo "<br> Kết quả tìm số 20 là: Không";
    }
?>