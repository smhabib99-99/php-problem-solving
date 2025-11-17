<!--  24. Function to calculate GCD of two numbers. -->

<?php

    $a = fgets(STDIN);
    $b = fgets(STDIN);
    $a = (int) trim($a);
    $b = (int) trim($b);

    function findGCD($a, $b)
    {

        // in anyway ami variable a ke boro korte chassi.
        if ($a < $b) {
            $temp = $a;
            $a    = $b;
            $b    = $temp;
        }

        $temp_a = 0;
        while ($b != 0) {
            $c      = $a % $b;
            $temp_a = $b;
            $b      = $c;

        }

        return $temp_a;
    }

    $gcd = findGCD($a, $b);
    echo "GCD of $a and $b is $gcd\n";

?>