<!DOCTYPE html>
<html>
    <head>
        <title> Task 3 </title>
    </head>
    <body>

    <?php
        function sum(...$input) {
            $result = 0;
            foreach($input as $num) {
                $result += $num;
            }

            return $result;
        }

        echo "<br>";
        
        $total = sum(2, 3);
        echo "\$total = " . $total . "<br>";
        
        $total = sum(2, 3, 4);
        echo "\$total = " . $total . "<br>";

        $total = sum(2, 3, 4, 5);
        echo "\$total = " . $total;
    ?>

    </body>
</html>