<?php
$mau = array("t" => "trắng", "x" => "xanh", "v"=> "vàng");
echo "Mảng ban đầu là: ";

print_r($mau);

echo "<br> Mảng các khoá là: ";
$khoa = array_keys($mau);
print_r ($khoa);

echo "<br> Mảng các giá trị là: ";
$giatri = array_values($mau);
print_r ($giatri);
?>