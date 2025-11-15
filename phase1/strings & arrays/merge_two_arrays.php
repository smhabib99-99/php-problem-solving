<!-- 17. Merge two arrays. -->

<?php

    $arr1 = fgets(STDIN);
    $arr1 = trim($arr1);
    $arr1 = explode(' ', $arr1);

    $arr2 = fgets(STDIN);
    $arr2 = trim($arr2);
    $arr2 = explode(' ', $arr2);

    $mergedArray = [];

    for ($i = 0; $i < count($arr1); $i++) {
        $mergedArray[] = $arr1[$i];
    }

    for ($i = 0; $i < count($arr2); $i++) {
        $mergedArray[] = $arr2[$i];
    }

    echo implode(" ", $mergedArray) . "\n";
    // print_r($mergedArray . "\n");

    /*

    In PHP, explode() and implode() are two complementary string functions used for converting between strings and arrays.
1. explode() function:
The explode() function splits a string into an array of substrings based on a specified delimiter.
Code

array explode ( string $delimiter, string $string [, int $limit = PHP_INT_MAX ] )
$delimiter: The string that marks the boundary where the string should be split.
$string: The input string to be split.
$limit (optional): If provided, the returned array will contain a maximum of $limit elements. The last element will contain the rest of the string.
Example:
Code

<?php
$string = "apple,banana,orange";
$fruits = explode(",", $string);
print_r($fruits);
/* Output:
Array
(
    [0] => apple
    [1] => banana
    [2] => orange
)

2. implode() function:
The implode() function joins array elements into a single string using a specified glue (separator).
Code

string implode ( string $glue, array $pieces )
$glue: The string used to join the elements of the array.
$pieces: The array of strings to be joined.
Example:
Code

<?php
$fruits = ["apple", "banana", "orange"];
$string = implode("-", $fruits);
echo $string; // Output: apple-banana-orange
In summary:
explode() breaks a string into an array.
implode() joins an array into a string.
Both functions are essential for manipulating and transforming data between string and array formats in PHP.

    */

?>