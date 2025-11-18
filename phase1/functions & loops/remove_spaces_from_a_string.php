<!--  30. Function to remove spaces from a string. -->

<?php

    function removeSpaces($str)
    {
        $newStr = "";
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] !== ' ') {
                $newStr .= $str[$i];
            }
        }
        return $newStr;
    }

    $str = fgets(STDIN);
    $str = trim($str);

    $result = removeSpaces($str);

    echo "String: $str after removing spaces is: $result\n";

?>
