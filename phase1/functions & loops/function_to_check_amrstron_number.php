<!--  21. Function to check Armstrong number. -->

<?php

    $number = fgets(STDIN);
    $number = trim($number);
    $number = (int) $number;

    function armstrongNumber($num)
    {
        $num1 = $num;

        $sum = 0;
        $len = strlen($num1);
        for ($i = 0; $i < $len; $i++) {
            if ($num1 > 0) {
                $n1 = $num1 % 10;
                $sum += pow($n1, $len);
                $num1 = (int) $num1 / 10;
            }
        }

        // echo "Sum: $sum\n";
        // echo "num1: $num\n";

        return $sum == $num;
    }

    $result = armstrongNumber($number);
    if ($result) {
        echo "$number is Armstrong Number\n";
    } else {
        echo "$number is not Armstrong Number\n";
    }

?>