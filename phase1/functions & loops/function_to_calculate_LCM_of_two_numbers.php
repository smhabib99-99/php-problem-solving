<!--  25. Function to calculate LCM of two numbers. -->

<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);

    $a = (int) trim($a);
    $b = (int) trim($b);

    function calculateGCD($a, $b)
    {
        if ($a < $b) {
            $temp = $a;
            $a    = $b;
            $b    = $temp;
        }

        $temp_a = 0;
        while ($b != 0) {
            $temp_b = $a % $b;
            $temp_a = $b;
            $b      = $temp_b;
            $a      = $temp_a;
        }

        return $temp_a;
    }

    function calculateLCM($a, $b)
    {
        $gcd = calculateGCD($a, $b);
        $lcm = ($a * $b) / $gcd;
        return $lcm;
    }

    $result = calculateLCM($a, $b);
    echo "LCM of $a and $b is $result\n";

?>