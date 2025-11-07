<!-- Check if a string is palindrome. -->

<?php

    $str = fgets(STDIN);
    $str = trim($str);
    $str = strtolower($str);

    $reverseString = ""; //empty string in php. pore character push korbo.
    $len           = strlen($str);

    for ($i = $len - 1; $i >= 0; $i--) {
        $reverseString .= $str[$i];
    }

    if ($str == $reverseString) {
        echo "$str is palindrome, which is $reverseString\n";
    } else {
        echo "$str is not palindrome, which is $reverseString\n";
    }

?>