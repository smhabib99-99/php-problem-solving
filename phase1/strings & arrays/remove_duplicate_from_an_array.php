<!--  18. Remove duplicates from an array. -->

<?php

    $arr1 = fgets(STDIN);
    $arr1 = trim($arr1);
    $arr1 = explode(" ", $arr1);

    $unique = [];

    for ($i = 0; $i < count($arr1); $i++) {
        $flag = false;
        for ($j = 0; $j < count($unique); $j++) {
            if ($arr1[$i] == $unique[$j]) {
                $flag = true;
                break;
            }
        }

        if (! $flag) {
            $unique[] = $arr1[$i];
        }
    }

    echo implode(" ", $unique) . "\n"; // implode(" ", variable) use korar por solve hoi ==> PHP Notice:  Array to string conversion in /home/habib/Desktop/php-problem-solving/phase1/strings & arrays/remove_duplicate_from_an_array.php on line 25

    // print_r($unique);

?>