<!-- Calculate factorial of a number. -->
 <?php

     $n         = trim(fgets(STDIN));
     $factorial = 1;
     for ($i = 1; $i <= $n; $i++) {
         $factorial = $factorial * $i;
     }
     echo "Factorial is: $factorial\n";

 ?>