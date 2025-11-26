<?php
$so = array(10, 20, 30);
echo "Mảng ban đầu là: <br>";

print_r($so);


array_unshift($so, 1, 5);
echo "<br> Sau khi thêm <br>";
print_r($so);

?>