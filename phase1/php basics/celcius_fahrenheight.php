<!-- Convert Celsius to Fahrenheit. -->
 <?php

     $celcius = trim(fgets(STDIN));
     // c=5/9*(f-32);
     // so f=9/5*c+32;

     $fahrenheight = 9 / 5 * ($celcius + 32);
     echo "Celcius: $celcius is in $fahrenheight Fahrenheight\n";

 ?>