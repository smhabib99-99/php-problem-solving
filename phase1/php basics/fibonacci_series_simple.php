<!-- Print Fibonacci series up to n. -->
<!-- fibonacci in normal way just using loop -->
 <?php

     $n = trim(fgets(STDIN));
     $a = 0;
     $b = 1;
     for ($i = 1; $i <= $n; $i++) {
         echo "$a ";
         $next = $a + $b;
         $a    = $b;
         $b    = $next;
     }
     echo "\n";

 ?>