<!-- 16. Sort an array in ascending order. -->
 <?php

     class SortArray
     {
         // class property
         public $arr;

         //  class constructor for auto setting class property.
         public function __construct($arr)
         {
             $this->arr = $arr;
         }

         //  class function for actual job.
         public function sortArray()
         {
             $arr = $this->arr;
             $len = count($arr);

             // eta holo selection sort.
             for ($i = 0; $i < $len - 1; $i++) {
                 for ($j = $i + 1; $j < $len; $j++) {
                     if ($arr[$i] > $arr[$j]) {
                         $temp    = $arr[$i];
                         $arr[$i] = $arr[$j];
                         $arr[$j] = $temp;
                     }
                 }
             }

             return $arr;

         }

     }

     $numbers = fgets(STDIN);
     $numbers = trim($numbers);
     $arr     = explode(" ", $numbers); // explode string to array. mane holo explode korle string ta ke array te poriborton kora hoi.

     for ($i = 0; $i < count($arr); $i++) {
         $arr[$i] = (int) $arr[$i];
     }

     $sortArrayObject = new SortArray($arr);
     $result          = $sortArrayObject->sortArray();
     echo implode(" ", $result) . "\n";

 ?>