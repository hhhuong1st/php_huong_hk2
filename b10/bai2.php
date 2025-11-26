<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        VCT giải phương trình bậc 1 <br>
        Nhập A: <input type="number" name="txtA" id="" value="<?php  if (isset($_POST['txtA'])) echo $_POST ['txtA']; ?>"> <br> 
        Nhập B: <input type="number" name="txtB" id="" value="<?php  if (isset($_POST['txtB'])) echo $_POST ['txtB']; ?>">
        <input type="submit" value="Xử lý">
    </form>
    <?php
        if (isset($_POST['txtA']) && isset($_POST['txtB'])) {
            $A = $_POST['txtA'];
            $B = $_POST['txtB'];

            
            if ($A == 0) {
                if ($B == 0) {
                    echo "Phương trình có vô số nghiệm.";
                } else {
                    echo "Phương trình vô nghiệm.";
                }
            } else {
                $x = -$B / $A;
                echo "Phương trình có nghiệm duy nhất: x = $x";
            }
        }
            
    ?>
</body>
</html>