<?php
$so = array(10, 20, 30,40,50,60,70,80,90,100);
echo "Mảng ban đầu là: <br>";
print_r($so);

array_shift($so);
echo "<br> Sau khi xoá phần tử đầu tiên là: <br>";
print_r($so);

$sopt = 5;
echo "<br> Sau khi xoá thêm $sopt phần tử là: <br>";
for ($i=1; $i<=$sopt; $i++){
    array_shift($so);
}
print_r($so);
?>