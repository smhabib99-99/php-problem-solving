<!-- calculate factorial of a number using simple recursion -->
 <?php

     function factorial($n)
     {
         // recursion should have base case : Base Case
         if ($n == 0 || $n == 1) {
             return 1;
         } else {
             // Recursive Case.
             return $n * factorial($n - 1);
         }
     }

     $n      = trim(fgets(STDIN));
     $result = factorial($n);
     echo "Factorial is: $result\n";

 ?>