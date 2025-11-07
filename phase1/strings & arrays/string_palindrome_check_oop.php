<!-- Check if a string is palindrome using class and oop. -->

<?php

    class PalindromeCheck
    {
        public $str;
        public function __construct($str)
        {
            $this->str = $str;
        }
        public function checkPalindrome()
        {
            $str = $this->str;
            $len = strlen($str);

            $reverseString = "";
            for ($i = $len - 1; $i >= 0; $i--) {
                $reverseString .= $str[$i];
            }

            if ($str == $reverseString) {
                return true;
            } else {
                return false;
            }
        }
    }

    $str = fgets(STDIN);
    $str = trim($str);
    $str = strtolower($str);

    $palindromeObject = new PalindromeCheck($str);

    $result = $palindromeObject->checkPalindrome();

    if ($result) {
        echo "$str is Palindrome\n";
    } else {
        echo "$str is not Palindrome\n";
    }

?>
