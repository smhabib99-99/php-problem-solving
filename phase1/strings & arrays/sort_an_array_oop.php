<!-- 16. Sort an array in ascending order. -->
 <?php

     class SortArray
     {
         public $arr;

         public function __construct($arr)
         {
             $this->arr = $arr;
         }

         public function sortArray()
         {
             $arr = $this->arr;
             $len = count($arr);

             // eta holo bubble sort ar akta nam holo selection sort.
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
     $arr     = explode(" ", $numbers);

     for ($i = 0; $i < count($arr); $i++) {
         $arr[$i] = (int) $arr[$i];
     }

     $sortArrayObject = new SortArray($arr);
     $result          = $sortArrayObject->sortArray();
     echo implode(" ", $result) . "\n";

 ?>