<!-- Count vowels in a string -->

<?php

    class countVowelsInString
    {

        public $str;
        public function __construct($str)
        {
            $this->str = $str;
        }

        public function countVowels()
        {
            $count  = 0;
            $len    = strlen($this->str);
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            for ($i = 0; $i < $len; $i++) {
                $character = $this->str[$i];
                if ($character == 'a' || $character == 'e' || $character == 'i' || $character == 'o' || $character == 'u') {
                    $count++;
                }
            }
            return $count;
        }
    }

    $str = trim(fgets(STDIN));
    // $str = trim($str);
    $str = strtolower($str);

    $countObj   = new countVowelsInString($str);
    $finalCount = $countObj->countVowels();
echo "Total Count is: $finalCount\n";
?>