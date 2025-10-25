<!-- calculate factorial of a number -->
 <?php

     function factorial($n)
     {
         if ($n == 0 || $n == 1) {
             return 1;
         } else {
             return $n * factorial($n - 1);
         }
     }

     $n      = trim(fgets(STDIN));
     $result = factorial($n);
     echo "Factorial is: $result\n";

 ?>