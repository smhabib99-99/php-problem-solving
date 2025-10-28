<!-- Check if a number is prime or Not using class & OOP. -->
<?php
    class checkPrime
    {

        // property
        public $n;

        // constructor for setting property
        public function __construct($n)
        {
            $this->n = $n;
        }

        public function isPrime()
        {
            $number = $this->n;
            if ($number <= 1) {
                echo "Number $number is not prime Number.\n";
                return;
            }

            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    echo "Number $number is not a Prime Number.\n";
                    // break; -->
                    return;
                    //"return" ==> returning from function use korle ar flag=true lagbe na;
                }
            }
            echo "Number $number is a Prime Number.\n";
        }

    }

    $n           = trim(fgets(STDIN));
    $primeObject = new checkPrime($n);
    $primeObject->isPrime();

?>