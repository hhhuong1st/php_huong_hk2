<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        VCT giải phương trình bậc 2 <br>
        Nhập A: <input type="number" name="txtA" id="" value="<?php  if (isset($_POST['txtA'])) echo $_POST ['txtA']; ?>"> <br> 
        Nhập B: <input type="number" name="txtB" id="" value="<?php  if (isset($_POST['txtB'])) echo $_POST ['txtB']; ?>"> <br>
        Nhập C: <input type="number" name="txtC" id="" value="<?php  if (isset($_POST['txtC'])) echo $_POST ['txtC']; ?>">
        <input type="submit" value="Xử lý">
    </form>
    <?php
        if (isset($_POST['txtA']) && isset($_POST['txtB']) && isset($_POST['txtC'])) {
            $A = $_POST['txtA'];
            $B = $_POST['txtB'];
            $C = $_POST['txtC'];
            
            if ($A == 0) {
                if ($B == 0) {
                    if ($C == 0) {
                        echo "Phương trình có vô số nghiệm.";
                    }
                    else {
                        echo "Phương trình vô nghiệm.";
                    }
                }
                else {
                    $x = -$C / $B;
                    echo "Phương trình có nghiệm duy nhất: x = $x";
                }
            } 
            else{
                    $delta = $B *$B -4 *$A *$C;
                    if ($delta <0){
                        echo "Phương trình vô nghiệm";
                    } 
                    elseif ($delta == 0) {
                        $x = -$B / (2*$A);
                        echo " Phương trình có nghiệm kép X1 = X2 = $x";
                    }
                    else {
                        $x1 = (-$B + (sqrt($delta))) / (2*$A);
                        $x2 = (-$B - (sqrt($delta))) / (2*$A);
                        echo "Phương trình có 2 nghiệm phân biệt: ";
                        echo "X1 = $x1 , ";
                        echo "X2 = $x2";
                    }
             }
        }   
    ?>
</body>
</html>