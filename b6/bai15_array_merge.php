<?php
$so1 = array(10,20,30);
echo "Mảng số 1 là: ";
print_r($so1);
$so2 = array(40,50,60);
echo "<br> Mảng số 2 là: ";
print_r($so2);

echo "<br> Hợp nhất mảng số 1 và số 2 là: ";
$so = array_merge($so1, $so2);
print_r ($so);

?>