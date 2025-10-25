<!-- calculate factorial of a number using simple class and OOP in php -->

<?php

    class FactorialCalculate
    {
        public function factorial($n)
        {
            // Base Case
            if ($n == 0 || $n == 1) {
                return 1;
            } else {
                // Recursive Case
                return $n * $this->factorial($n - 1);
            }
        }
    }

    $n               = trim(fgets(STDIN));
    $factorialObject = new FactorialCalculate();
    $result          = $factorialObject->factorial($n);
    echo "Factorial is: $result\n";

?>