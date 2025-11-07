<!-- Reverse a string without using built-in functions but using oop in php -->

<?php

    class revString
    {
        public $str;
        // public $len;
        public function __construct($str)
        {
            $this->str = $str;
            // $this->len = strlen($str);
        }

        public function reverseString()
        {
            $str = $this->str;
            $len = strlen($str);

            $reverse = "";
            for ($i = $len - 1; $i >= 0; $i--) {
                $reverse .= $str[$i];
            }
            return $reverse;
        }
    }

    $str = fgets(STDIN);
    $str = trim($str);
    $str = strtolower($str);

    $strObject = new revString($str);
    $result    = $strObject->reverseString();
    echo "Reverse string is: $result\n";

?>