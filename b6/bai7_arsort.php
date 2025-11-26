<?php
$mau = array("t" => "trắng", "x" => "xanh", "v"=> "vàng");
echo "Mảng ban đầu là: <br>";

print_r($mau);


arsort($mau);
echo "<br> Mảng sắp xếp giảm dần theo giá trị là: <br>";
print_r($mau);


?>