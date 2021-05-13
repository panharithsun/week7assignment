<!DOCTYPE html>
<html>
    <head>
        <title> Task 2 </title>
    </head>
    <body>

    <?php
        $arr = [2, 3, 4, 6, 7, 9, 11, 20];
        $result = array_filter($arr, fn($num) => $num % 2 == 0);
        
        print_r($result);

        foreach($result as $n) {
            echo $n . " ";
        }
        
    ?>

    </body>
</html>