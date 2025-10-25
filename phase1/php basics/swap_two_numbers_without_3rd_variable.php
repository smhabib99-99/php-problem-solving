<!-- Swapping two numbers without using a third variable -->
 <?php

     // here i have used fgets to take input from user in php, which is like scanf in c language, & also fgets in c language takes input including spaces until new line is encountered.
     //  if i wish i can use fgets in cpp language also.
     $a = trim(fgets(STDIN));
     $b = trim(fgets(STDIN));
     echo "Before swapping: a =$a, b=$b\n";

     //  swapping logic without using 3rd variable.
     $a = $a + $b;
     $b = $a - $b;
     $a = $a - $b;
     echo "After Swapping: a =$a, b=$b\n";

     //  for command line run use: php swap_two_numbers_without_3rd_variable.php
 // php swap_two_numbers_without_3rd_variable.php
 ?>