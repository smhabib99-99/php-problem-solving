<!-- Reverse a string without using built-in functions. -->
 <?php

     $str = fgets(STDIN);
     $str = trim($str);
     $str = strtolower($str);

     $len = strlen($str);

     $reverseString = "";
     for ($i = $len - 1; $i >= 0; $i--) {
         $reverseString .= $str[$i];
     }

     echo "Reverse string is: $reverseString.\n";

 ?>