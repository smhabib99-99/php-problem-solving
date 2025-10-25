<!-- Check if a number is odd or even. -->
 <?php

     $n = trim(fgets(STDIN));
     if ($n % 2 == 0) {
         echo "even\n";
     } else {
         echo "odd\n";
     }

 ?>