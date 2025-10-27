<!-- Sum of digits of a number using OOP and class -->
 <?php

     //  class or blueprint of object.
     // object which
     class sumOfDigits
     {
         public $n;
         public function __construct($n)
         {
             $this->n = $n;
         }
         public function sumDigit()
         {
             $num = $this->n;
             $sum = 0;
             while ($num != 0) {
                 $digit = $num % 10;
                 $sum += $digit;
                 $num = (int) ($num / 10);
             }
             return $sum;
         }
     }

     //  Taking input in $n.
     $n      = trim(fgets(STDIN));
     $sumObj = new sumOfDigits($n);
     $result = $sumObj->sumDigit();
     echo "Sum of Digits of a Number $n is $result\n";

 ?>