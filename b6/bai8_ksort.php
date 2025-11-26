<?php
$mau = array("t" => "trắng", "x" => "xanh", "v"=> "vàng");
echo "Mảng ban đầu là: <br>";

print_r($mau);


ksort($mau);
echo "<br> Mảng sắp xếp tăng dần theo khoá là: <br>";
print_r($mau);


?>