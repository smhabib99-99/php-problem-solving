<?php

$n     = trim(fgets(STDIN));
$rootN = sqrt($n);

if ($n <= 1) {
    echo "Number: $n is not a Prime Number.\n";
    exit;
}

$flag = false;

for ($i = 2; $i <= $rootN; $i++) {
    if ($n % $i == 0) {
        $flag = true;
        break;
    }
}

if ($flag) {
    echo "Number: $n is not a prime Number.\n";
} else {
    echo "Number: $n is Prime Number.\n";
}
