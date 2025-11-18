<!--  28. Function to count even and odd numbers in an array. -->

<?php

    function evenOddCount($n, $arr)
    {

        $evenCount = 0;
        $oddCount  = 0;
        foreach ($arr as $item) {
            if ($item % 2 == 0) {
                $evenCount++;
            } else {
                $oddCount++;
            }
        }
        echo "Even Count: $evenCount and Odd Count: $oddCount\n";
    }

    $n = fgets(STDIN);
    $n = trim($n);

    $arr = [];

    for ($i = 0; $i < $n; $i++) {
        $num     = fgets(STDIN);
        $num     = (int) trim($num);
        $arr[$i] = $num;
    }

    evenOddCount($n, $arr);

?>