<!-- 15. Find the largest element in an array. -->
 <?php

     class FindLargest
     {
         public $arr;

         public function __construct($arr)
         {
             $this->arr = $arr;
         }

         public function findLargestNumber()
         {
             $arr     = $this->arr;
             $largest = $arr[0];
             $len     = count($arr);
             echo "length: $len\n"; // checking length of array. je thik moto array ta ashtese ki na? jehetu ami eta ansi class property diye.

             for ($i = 1; $i < $len; $i++) {
                 if ($arr[0] < $arr[$i]) {
                     //  $temp    = $arr[0];
                     //  $arr[0]  = $arr[$i];
                     //  $arr[$i] = $temp;
                     $largest = $arr[$i];
                 }
             }

             return $largest;

         }

     }

     $numbers = fgets(STDIN);
     $numbers = trim($numbers);

     $arr = explode(" ", $numbers); // explode diye string theke array te convert korlam.
                                    //  for ($i = 0; $i < count($arr); $i++) {
                                    //      echo "$arr[$i]\n";

     //  }

     $largestObject = new FindLargest($arr);
     $result        = $largestObject->findLargestNumber();
     echo "Largest element in the array is: $result\n";

 ?>