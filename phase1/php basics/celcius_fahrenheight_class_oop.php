<!-- Convert Celsius to Fahrenheit using class oop. -->
 <?php

     class Fahrenheight
     {
         public $c;

         public function __construct($c)
         {
             $this->c = $c;
         }
         public function celciusToFahrenheight()
         {
             $f = ($this->c * (9 / 5)) + 32;
             return $f;
         }
     }

     $c                 = trim(fgets(STDIN));
     $fahrnheightObject = new Fahrenheight($c);
     $result            = $fahrnheightObject->celciusToFahrenheight();
 echo "Celcius: $c to Fahrenheight:$result\n";
 ?>