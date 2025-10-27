<!-- Print Fibonacci series up to n. -->
 <!-- using function in php -->
 <?php

     function fibonacci($n)
     {

         $a = 0;
         $b = 1;

         for ($i = 0; $i < $n; $i++) {

             echo $a . " ";
             $next = $a + $b;
             $a    = $b;
             $b    = $next;
         }
         echo "\n";

     }

     $n = trim(fgets(STDIN));
     fibonacci($n);

 ?>