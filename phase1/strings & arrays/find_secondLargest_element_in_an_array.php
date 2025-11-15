<!-- 19. Find the second largest element in an array. -->

<?php

    $arr = fgets(STDIN);
    $arr = trim($arr);
    $arr = explode(" ", $arr); // explode string to array.

    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i] = (int) $arr[$i];
    }

    $largest       = PHP_INT_MIN;
    $secondLargest = PHP_INT_MIN;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $temp          = $largest;
            $largest       = $arr[$i];
            $secondLargest = $temp;
        }
    }

    echo "Second Largest is: $secondLargest." . "\n";

?>