<!--  37. Implement constructor and destructor in a class. -->
<?php

    class Person
    {
        public $name;

        public function __construct($name)
        {
            $this->name = $name;

            echo "$this->name is from Constructor.\n";
        }

        public function __destruct()
        {
            echo "$this->name is from Destructor.\n";
        }

    }

    $person = new Person("Habib");
    echo "This is Habib from after Object creation.\n";

?>