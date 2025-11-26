<?php
$ten = array("nice TO MEET you");
echo "Mảng ban đầu là: ";
print_r($ten);

function chuthuong($s){
    return strtolower($s);
}

$mangmoi = array_map("chuthuong", $ten);
print_r($mangmoi);
?>