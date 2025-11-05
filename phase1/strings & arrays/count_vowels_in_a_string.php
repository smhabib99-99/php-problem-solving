<!-- Count vowels in a string -->

<?php

    $string = fgets(STDIN);
    $string = trim($string);

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count  = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        $character = $string[$i];
        if ($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u' || $character == 'A' || $character == 'E' || $character == 'I' || $character == 'O' || $character == 'U') {
            $count++;
        }
    }

    echo "Vowels count in a String is: $count\n";

?>