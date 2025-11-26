<?php
    //Bài tập 1
    $ten = array("nice TO MEET you");
    echo "Mảng ban đầu là: ";
    print_r($ten);

    function chuthuong($s){
        return strtolower($s);
    }

    $mangmoi = array_map("chuthuong", $ten);
    echo "<br> Chuyển thành chữ thường: ";
    print_r($mangmoi);

    //Bài tập 2
    echo "<hr>";
    $so = array(3,5,7);
    echo "Mảng ban đầu là: ";
    print_r($so);

    function binhphuong($n){
        return ($n * $n);
    }

    $bp = array_map("binhphuong", $so);
    echo "<br> Sau khi bình phương: ";
    print_r($bp);

    //Bài tập 3
    echo "<hr>";
    $so1 = array(3,5,7);
    $so2 = array(3,6,7);
    echo "Mảng số 1 là: ";
    print_r($so1);
    echo "<br> Mảng số 2 là: ";
    print_r($so2);

    function bangnhau($n1, $n2){
        if ($n1 == $n2) {
            echo "<br>Bằng nhau";
        }else
        echo "<br>Không bằng nhau";
    }

    $bn = array_map("bangnhau", $so1, $so2);
    // echo "<br>Kiểm tra xem có bằng nhau không: ";
    // print_r($bn);


    //Bài tập 4
    echo "<hr>";
    $so = array(3,5,8);
    echo "Mảng ban đầu là: ";
    print_r($so);

    function sochan($n){
        if ($n % 2==0) {
            return $n;
        }
    }

    $sc = array_filter($so, "sochan");
    echo "<br>Mảng các giá trị chẵn là: ";
    print_r($sc);


    //Bài tập 5
    echo "<hr>";
    $so = array(3,5,8);
    echo "Mảng ban đầu là: ";
    print_r($so);

    function tinhtong($a, $b){
            return $a + $b;
    }

    $tt = array_reduce($so, "tinhtong", 0);
    echo "<br>Tổng các giá trị là: ";
    print_r($tt);
?>