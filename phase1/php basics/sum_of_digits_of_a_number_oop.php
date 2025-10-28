<!-- Sum of digits of a number using OOP and class -->
 <?php

     //  class or blueprint of object.
     // object which
     class sumOfDigits
     {
         // property
         public $n;

         //  constructor method to set value of property.
         public function __construct($n)
         {
             $this->n = $n;
         }
         //  class method to calculate sum of digits.
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

     //  main code
     //  Taking input in $n.
     $n      = trim(fgets(STDIN));
     $sumObj = new sumOfDigits($n);
     $result = $sumObj->sumDigit();
     echo "Sum of Digits of a Number $n is $result\n";

 ?>