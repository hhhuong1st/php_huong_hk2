<?php
    $so = 2;
    echo "Cho số là: $so <br>";
    switch ($so) {
        case 2:
            echo "Hôm nay là thứ 2";
            break;

        case 3:
            echo "Hôm nay là thứ 3";
            break;

        default:
           echo "Không có giá trị";
            break;
    }
//Bài 4
    $thang = 2;
    echo "<hr> Chương trình cho biết mùa của tháng $thang là: ";
    switch ($thang) {
        case 1: case 2: case 3:
            echo "mùa xuân";
            break;
        case 4: case 5: case 6:
            echo "mùa hạ";
            break;
        case 7: case 8: case 9:
            echo "mùa thu";
            break;
        case 10: case 11: case 12:
            echo "mùa đông";
            break;

        default:
           echo "Không có giá trị";
            break;
    }
    
?>