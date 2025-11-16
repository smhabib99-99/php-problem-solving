<!--  23. Function to print multiplication table. -->
<?php

    $n = fgets(STDIN);
    $n = trim($n);
    $n = (int) $n;

    // manual system to create multiplication table.
    // for ($i = 0; $i <= 10; $i++) {
    //     $result = $n * $i;
    //     echo "$n * $i = $result\n";
    // }

    function multiplicationTable($n)
    {
        // $result = 0;
        for ($i = 0; $i <= 10; $i++) {
            $result = $n * $i;
            echo "$n * $i = $result\n";
        }
    }

    $result = multiplicationTable($n);

?>
