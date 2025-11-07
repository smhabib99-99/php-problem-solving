<!-- Count words in a string. -->
 <?php

     class WordCounter
     {
         public $str;

         public function __construct($str)
         {
             $this->str = $str;
         }

         public function wordCounter()
         {
             $str   = $this->str;
             $len   = strlen($str);
             $count = 0;
             for ($i = 0; $i < $len - 1; $i++) {
                 if ($str[$i] == ' ' && $str[$i + 1] != ' ') {
                     $count++;
                 }
             }
             $count++;
             return $count;
         }

     }

     $str               = fgets(STDIN);
     $str               = trim($str);
     $str               = strtolower($str);
     $wordCounterObject = new WordCounter($str);
     $result            = $wordCounterObject->wordCounter();
     echo "Total word count is: $result\n";

 ?>