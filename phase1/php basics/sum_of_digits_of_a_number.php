<!-- Sum of digits of a number using function. -->
 <?php

     $n = trim(fgets(STDIN));
     function sumOfDigits($n)
     {
         $sum = 0;
         while ($n != 0) {
             $digit = $n % 10;
             $sum += $digit;
             $n = (int) ($n / 10);
         }
         return $sum;
     }
     $result = sumOfDigits($n);
     echo "Sum of Digits of a Number: $n is $result\n";

 ?>