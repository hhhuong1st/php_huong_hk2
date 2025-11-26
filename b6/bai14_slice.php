<?php
$so = array(10,20,30,40,50,60);
echo "Mảng ban đầu là: ";
print_r($so);

echo "<br> Mảng trích xuất phần tử mới là: ";
$so1 = array_slice($so, 2, 3);
print_r ($so1);

?>