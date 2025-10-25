<!-- Find the largest of three numbers. -->
 <?php

     $a = trim(fgets(STDIN));
     $b = trim(fgets(STDIN));
     $c = trim(fgets(STDIN));

     if ($a >= $b && $a >= $c) {
         echo "maximum is: $a\n";
     } elseif ($b >= $a && $b >= $c) {
         echo "maximum is: $b\n";
     } else {
         echo "maximum is: $c\n";
     }
     // run code in command line like this: php largest_num.php
 // like: Programming language name , then file name.
 ?>