<?php
$mau = array("t" => "trắng", "x" => "xanh", "v"=> "vàng");
echo "Mảng ban đầu là: <br>";

print_r($mau);


krsort($mau);
echo "<br> Mảng sắp xếp giảm dần theo khoá là: <br>";
print_r($mau);


?>