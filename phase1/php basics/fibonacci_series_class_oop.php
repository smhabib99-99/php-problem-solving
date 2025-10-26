<!-- Print Fibonacci series up to n using class and oop. -->
 <!-- if i want, i can solve this problem without constructor part just direct function -->
<?php

    class FibonacciSeries
    {
        // property of class
        public $n;
        // constructor to initialize property
        public function __construct($n)
        {
            $this->n = $n;
        }
        // method to print fibonacci series
        public function fibonacci()
        {
            $a = 0;
            $b = 1;
            for ($i = 1; $i <= $this->n; $i++) {
                $next = $a + $b;
                echo "$a ";
                $a = $b;
                $b = $next;
            }
            echo "\n";
        }
    }
    // create object of class and call constructor with value 8 for n property.
    // in real scenario, you can take input from user using fgets(STDIN)
    $n = trim(fgets(STDIN));
    // i have created here dynamic object.
    $fibonacciObject = new FibonacciSeries($n);
    // here i have called method of dynamic object.
    $fibonacciObject->fibonacci();

?>