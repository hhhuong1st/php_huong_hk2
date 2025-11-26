<?php
$mau = array("t" => "trắng", "x" => "xanh", "v"=> "vàng");
echo "Mảng ban đầu là: <br>";

print_r($mau);


echo "<br> Tìm kiếm khoá t: ";
var_dump(array_key_exists("t", $mau));


?>