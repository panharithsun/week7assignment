<!DOCTYPE html>
<html>
    <head>
        <title> Task 1 </title>
    </head>
    <body>

        <?php 
            function reverse($input) {
                $rev = strrev($input);
                $arr = explode(" ", $rev);

                $result = "";
                $len = count($arr);

                for($i = $len - 1; $i >= 0; $i--) {
                    $result = $result . $arr[$i];

                    if ($i != 0) {
                        $result = $result . " ";
                    }
                }
                
                return $result;
            };

            echo reverse("emocleW ot PHP")
        ?> 

    </body>
</html>