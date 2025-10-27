<!-- Reverse a number. -->
 <?php

     echo "Enter a positive Number to Print reverse:";
     $n = trim(fgets(STDIN));
     function reverseNumber($n)
     {
         $reverse = 0;

         while ($n != 0) {
             $a       = $n % 10;
             $reverse = ($reverse * 10) + $a;
             $n       = (int) ($n / 10);
         }
         return $reverse;
     }
     $result = reverseNumber($n);
     echo "Reverse number of $n is $result\n";

 ?>