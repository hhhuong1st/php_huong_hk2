<?php
        // Kiểm tra dữ liệu nhập
        if(isset($_POST['txts1'])){
            $s1 = $_POST['txts1'];
            echo "Chuỗi 1 là: ".$s1;
        }

        if(isset($_POST['txts2'])){
            $s2 = $_POST['txts2'];
            echo "<br> Chuỗi 1 là: ". $s2;
        }
    ?>
    <form action="#" method="post">
        Chuỗi S1: <input type="text" name="txts1"> <br>
        Chuỗi S2: <input type="password" name="txts2">
        <input type="submit" value="Gửi">
    </form>